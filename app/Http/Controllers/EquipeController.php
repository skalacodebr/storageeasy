<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EquipeController extends Controller
{
    public function index()
    {
        return view('equipe.index');
    }

    public function create()
    {
        return view('equipe.create');
    }

    public function getData(Request $request)
    {
        try {
            $perPage = $request->get('per_page', 10);
            $page = $request->get('page', 1);
            $search = $request->get('search', '');

            // Query base
            $query = DB::table('users');

            // Aplicar busca se fornecida
            if (!empty($search)) {
                $query->where(function($q) use ($search) {
                    $q->where('nome', 'LIKE', "%{$search}%")
                      ->orWhere('email', 'LIKE', "%{$search}%");
                });
            }

            // Contar total de registros
            $total = $query->count();

            // Aplicar paginação
            $offset = ($page - 1) * $perPage;
            $users = $query->orderBy('created_at', 'desc')
                          ->limit($perPage)
                          ->offset($offset)
                          ->get();

            // Calcular dados de paginação
            $totalPages = ceil($total / $perPage);
            $hasNext = $page < $totalPages;
            $hasPrev = $page > 1;

            // Formatear dados dos usuários
            $formattedUsers = $users->map(function($user) {
                return [
                    'id' => $user->id,
                    'nome' => $user->nome,
                    'email' => $user->email,
                    'valor_por_hora' => number_format((float)$user->valor_por_hora, 2, ',', '.'),
                    'custo_mensal' => $user->custo_mensal ? number_format((float)$user->custo_mensal, 2, ',', '.') : null,
                    'permissoes' => $user->permissoes,
                    'status' => ucfirst($user->status ?? 'ativo'), // Ativo ou Inativo
                    'created_at' => $user->created_at
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $formattedUsers,
                'pagination' => [
                    'current_page' => (int)$page,
                    'per_page' => (int)$perPage,
                    'total' => $total,
                    'total_pages' => $totalPages,
                    'has_next' => $hasNext,
                    'has_prev' => $hasPrev,
                    'from' => $offset + 1,
                    'to' => min($offset + $perPage, $total)
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao buscar dados da equipe: ' . $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            // Verificar se o e-mail já existe
            $emailExists = DB::table('users')->where('email', $request->email)->exists();
            if ($emailExists) {
                return response()->json([
                    'success' => false,
                    'message' => 'E-mail já cadastrado',
                    'error_type' => 'email_exists',
                    'email' => $request->email
                ], 422);
            }

            // Validar os dados
            $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|email',
                'senha' => 'required|string|min:6',
                'permissoes' => 'required|array|min:1',
                'status' => 'required|in:ativo,inativo',
                'valor_por_hora' => 'required|string|min:1',
                'custo_mensal' => 'nullable|string'
            ], [
                'nome.required' => 'O nome é obrigatório.',
                'email.required' => 'O e-mail é obrigatório.',
                'email.email' => 'O e-mail deve ter um formato válido.',
                'senha.required' => 'A senha é obrigatória.',
                'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
                'permissoes.required' => 'Pelo menos uma permissão deve ser selecionada.',
                'status.required' => 'O status é obrigatório.',
                'status.in' => 'O status deve ser ativo ou inativo.',
                'valor_por_hora.required' => 'O valor por hora é obrigatório.',
                'valor_por_hora.min' => 'O valor por hora deve ser preenchido.'
            ]);

            // Verificar se valor por hora não é vazio após formatação
            if (empty($request->valor_por_hora) || $request->valor_por_hora === '0,00') {
                return response()->json([
                    'success' => false,
                    'message' => 'Erro de validação',
                    'errors' => ['valor_por_hora' => ['O valor por hora é obrigatório e deve ser maior que zero.']]
                ], 422);
            }

            // Converter valores de moeda para decimal
            $valorPorHora = $this->convertCurrencyToDecimal($request->valor_por_hora);
            $custoMensal = $request->custo_mensal ? $this->convertCurrencyToDecimal($request->custo_mensal) : null;

            // Converter permissões array para string separada por vírgula
            $permissoes = implode(',', $request->permissoes);

            // Inserir no banco
            $userId = DB::table('users')->insertGetId([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
                'permissoes' => $permissoes,
                'status' => $request->status,
                'valor_por_hora' => $valorPorHora,
                'custo_mensal' => $custoMensal,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Membro da equipe criado com sucesso!',
                'user_id' => $userId
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro de validação',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro interno do servidor: ' . $e->getMessage()
            ], 500);
        }
    }

    private function convertCurrencyToDecimal($value)
    {
        // Remove pontos (separadores de milhares) e substitui vírgula por ponto
        $value = str_replace('.', '', $value);
        $value = str_replace(',', '.', $value);
        return (float) $value;
    }
    
    public function edite($id)
    {
        return view('equipe.edite');
    }
    
    public function view($id)
    {
        return view('equipe.view');
    }

    public function delete($id)
    {
        return view('equipe.delete');
    }
}
