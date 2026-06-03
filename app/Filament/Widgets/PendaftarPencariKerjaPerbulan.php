<?php

namespace App\Filament\Widgets;

use App\Models\PencariKerja;
use Filament\Widgets\ChartWidget;

class PendaftarPencariKerjaPerbulan extends ChartWidget
{
    protected ?string $heading = 'Pendaftaran Pencari Kerja per Bulan';
    protected static ?int $sort = 2;
    protected ?string $maxHeight = '260px';
    protected function getData(): array
    {
        $data = collect(range(1, 12))->map(function ($month) {
            return PencariKerja::whereMonth('tanggal_daftar', $month)
                ->whereYear('tanggal_daftar', now()->year)
                ->count();
        });

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pendaftaran',
                    'data' => $data,
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
