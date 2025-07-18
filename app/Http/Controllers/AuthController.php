<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    // processa o POST de login
    public function login(Request $request)
    {
        // 1) validação
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // 2) tentativa de login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // evita fixation
            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'redirect' => route('dashboard')
            ]);
        }

        // 3) credenciais inválidas
        return response()->json([
            'success' => false,
            'errors' => ['email' => ['E-mail ou senha incorretos.']]
        ], 401);
    }
    public function register(Request $request)
    {
        // Se for POST, processamos o cadastro
        if ($request->isMethod('post')) {

            // 1) Validação básica
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }

            // 2) Tentar inserir o usuário
            try {
                $userId = DB::table('users')->insertGetId([
                    'nome_completo' => $request->name,
                    'email' => $request->email,
                    'telefone' => $request->phone,
                    'password' => Hash::make($request->password),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } catch (QueryException $e) {
                // Código 23000 => violação de chave única (e‑mail duplicado)
                if ($e->getCode() === '23000') {
                    return response()->json([
                        'success' => false,
                        'errors' => ['email' => ['Este e‑mail já está cadastrado.']]
                    ], 409);
                }
                // para outros erros, relança
                throw $e;
            }

            // 3) Logar automaticamente o usuário recém‑criado
            Auth::loginUsingId($userId);

            // 4) Resposta de sucesso com URL de redirecionamento
            return response()->json([
                'success' => true,
                'redirect' => route('dashboard')
            ]);
        }

        // Se for GET, só exibe o formulário
        return view('auth.register');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}
