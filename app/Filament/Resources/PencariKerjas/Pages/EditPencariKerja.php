<?php

namespace App\Filament\Resources\PencariKerjas\Pages;

use App\Filament\Resources\PencariKerjas\PencariKerjaResource;
use App\Models\KartuAk1;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPencariKerja extends EditRecord
{
    protected static string $resource = PencariKerjaResource::class;

    protected function afterSave(): void
    {
        $pencariKerja = $this->record;

        // Skenario 1: Jika Pencari Kerja sudah memiliki Kartu AK-1, update datanya
        if ($pencariKerja->kartuAk1()->exists()) {

            // Contoh Logika: Jika status kerja diubah kembali ke 'Aktif',
            // kita perbarui/perpanjang tanggal berlakunya dari hari ini.
            if ($pencariKerja->status_kerja === 'Aktif') {
                $pencariKerja->kartuAk1()->update([
                    'tanggal_berlaku' => now()->addYears(2),
                ]);

                Notification::make()
                    ->title('Masa Berlaku Kartu AK-1 Diperbarui')
                    ->info()
                    ->body('Masa berlaku kartu otomatis diperpanjang hingga 2 tahun ke depan.')
                    ->send();
            }

            return;
        }

        // Skenario 2: Jika ternyata Pencari Kerja belum punya Kartu AK-1,
        // sistem akan membuatkannya secara otomatis (mirip logic saat Create)
        $kartu = $pencariKerja->kartuAk1()->create([
            'nomor_ak1' => $this->generateNomorAk1(),
            'tanggal_terbit' => now(),
            'tanggal_berlaku' => now()->addYears(2),
        ]);

        Notification::make()
            ->title('Kartu AK-1 Otomatis Dibuat!')
            ->success()
            ->body('Pencari kerja belum memiliki kartu, sistem berhasil men-generate Nomor: ' . $kartu->nomor_ak1)
            ->send();
    }

    /**
     * Method helper untuk men-generate nomor AK-1 unik
     */
    private function generateNomorAk1(): string
    {
        $lastId = KartuAk1::max('id') ?? 0;
        $nextId = $lastId + 1;

        return 'AK1-' . date('Y') . '-' . str_pad(
            $nextId,
            5,
            '0',
            STR_PAD_LEFT
        );
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
