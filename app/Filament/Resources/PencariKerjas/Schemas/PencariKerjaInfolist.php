<?php

namespace App\Filament\Resources\PencariKerjas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PencariKerjaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pencari Kerja')
                    ->schema([
                        TextEntry::make('nik')->label('NIK')->copyable(),
                        TextEntry::make('nama')->weight('bold'),
                        TextEntry::make('tempat_lahir')->placeholder('-'),
                        TextEntry::make('tanggal_lahir')->date('d F Y')->placeholder('-'),
                        TextEntry::make('jenis_kelamin')
                            ->badge()
                            ->color(fn(string $state): string => match ($state) {
                                'Laki-laki' => 'info',
                                'Perempuan' => 'danger',
                                default => 'gray',
                            }),
                        TextEntry::make('alamat')->columnSpanFull(),
                    ])->columns(2),

                Section::make('Informasi Tambahan')
                    ->schema([
                        TextEntry::make('pendidikan.jenjang')->badge()->color('primary'),
                        TextEntry::make('status_kerja')
                            ->badge()
                            ->color(fn(string $state): string => match ($state) {
                                'Aktif' => 'success',
                                'Sudah Bekerja' => 'gray',
                                default => 'warning',
                            }),
                        TextEntry::make('skills.nama')
                            ->badge()
                            ->label('Keahlian')
                            ->color('success'),
                    ])->columns(3),
            ]);
    }
}
