<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use setasign\Fpdf\Fpdf;
use Illuminate\Support\Facades\Storage;

class ContratosController extends Controller
{    public function index()
    {
        return view('contratos.index');
    }

    // Recebe o PDF, edita e retorna para download
    public function upload(Request $request)
    {
        $request->validate([
            'contract' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Armazena o arquivo original
        $path      = $request->file('contract')->store('contracts');
        $fullPath  = Storage::path($path);

        // Inicia FPDI
        $pdf       = new Fpdi();
        $pageCount = $pdf->setSourceFile($fullPath);

        // Para cada página, importamos e sobrescrevemos conteúdos
        for ($i = 1; $i <= $pageCount; $i++) {
            $tplId = $pdf->importPage($i);
            $size  = $pdf->getTemplateSize($tplId);
            $orient = $size['width'] > $size['height'] ? 'L' : 'P';

            $pdf->AddPage($orient, [$size['width'], $size['height']]);
            $pdf->useTemplate($tplId);

            // **Exemplo de remoção de texto**: cobre com retângulo branco
            if ($i === 1) {
                $pdf->SetFillColor(255, 255, 255);
                // x, y, largura, altura (em mm)
                $pdf->Rect(40, 100, 120, 8, 'F');
            }

            // **Exemplo de inclusão de logo**
            if ($i === 1) {
                $logoPath = public_path('images/logo.png');
                $pdf->Image($logoPath, 10, 10, 50);
            }

            // **Exemplo de inserção de texto**
            if ($i === 1) {
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetXY(40, 100);
                $pdf->Write(6, 'Texto adicionado dinamicamente pelo sistema');
            }
        }

        // Salva e força download
        $outPath = storage_path('app/contracts/edited_contract.pdf');
        $pdf->Output($outPath, 'F');

        return response()->download($outPath, 'contrato-editado.pdf')
                         ->deleteFileAfterSend(true);
    }

}
