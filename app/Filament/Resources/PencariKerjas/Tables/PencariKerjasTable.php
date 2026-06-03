<?php

namespace App\Filament\Resources\PencariKerjas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PencariKerjasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable()
                    ->copyable()
                    ->toggleable(),
                TextColumn::make('nama')
                    ->searchable()
                    ->weight('bold')
                    ->sortable(),
                TextColumn::make('jenis_kelamin')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Laki-laki' => 'info',
                        'Perempuan' => 'danger',
                        default => 'gray',
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_hp')
                    ->searchable()
                    ->icon('heroicon-m-phone'),
                // Menampilkan nama jenjang pendidikan, BUKAN ID-nya
                TextColumn::make('pendidikan.jenjang')
                    ->label('Pendidikan')
                    ->badge()
                    ->sortable(),
                TextColumn::make('skills.nama')
                    ->badge()
                    ->separator(',')
                    ->limitList(3),
                TextColumn::make('status_kerja')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Sudah Bekerja' => 'gray',
                        default => 'primary',
                    }),
                TextColumn::make('tanggal_daftar')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
