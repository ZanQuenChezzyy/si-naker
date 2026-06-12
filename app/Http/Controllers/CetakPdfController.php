<?php

namespace App\Http\Controllers;

use App\Models\KartuAk1;
use Barryvdh\DomPDF\Facade\Pdf;

class CetakPdfController extends Controller
{
    public function cetakAk1($id)
    {
        // Ambil data Kartu AK1 beserta relasi pencariKerja, pendidikan, dan skills
        $kartu = KartuAk1::with([
            'pencariKerja.pendidikan',
            'pencariKerja.skills'
        ])->findOrFail($id);

        // Load view blade yang akan di-convert ke PDF
        $pdf = Pdf::loadView('pdf.kartu-ak1', compact('kartu'));

        $pdf->setPaper('legal', 'landscape');

        // Gunakan stream() untuk membuka PDF di tab baru (seperti openUrlInNewTab() di Filament)
        // Jika ingin langsung download, ganti ->stream() menjadi ->download()
        return $pdf->stream('Kartu-AK1-' . $kartu->nomor_ak1 . '.pdf');
    }
}
