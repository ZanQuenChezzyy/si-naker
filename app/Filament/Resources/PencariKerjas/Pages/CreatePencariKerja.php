<?php

namespace App\Filament\Resources\PencariKerjas\Pages;

use App\Filament\Resources\PencariKerjas\PencariKerjaResource;
use App\Models\KartuAk1;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePencariKerja extends CreateRecord
{
    protected static string $resource = PencariKerjaResource::class;

    protected function afterCreate(): void
    {
        $pencariKerja = $this->record;

        // Cegah duplikasi AK1
        if ($pencariKerja->kartuAk1()->exists()) {
            return;
        }

        // Buat Kartu AK-1 otomatis
        $kartu = $pencariKerja->kartuAk1()->create([
            'nomor_ak1' => $this->generateNomorAk1(),
            'tanggal_terbit' => now(),
            'tanggal_berlaku' => now()->addYears(2),
        ]);

        // (Opsional & Menarik) Munculkan Notifikasi Pop-up di pojok kanan atas
        // Memberitahu admin bahwa kartu berhasil di-generate
        Notification::make()
            ->title('Kartu AK-1 Berhasil Dibuat!')
            ->success()
            ->body('Nomor: ' . $kartu->nomor_ak1)
            ->send();
    }

    private function generateNomorAk1(): string
    {
        // Ambil ID terakhir, jika kosong berarti 0, lalu tambah 1
        $lastId = KartuAk1::max('id') ?? 0;
        $nextId = $lastId + 1;

        return 'AK1-' . date('Y') . '-' . str_pad(
            $nextId,
            5,
            '0',
            STR_PAD_LEFT
        );
    }
}
