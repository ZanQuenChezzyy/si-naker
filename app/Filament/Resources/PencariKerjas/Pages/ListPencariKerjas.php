<?php

namespace App\Filament\Resources\PencariKerjas\Pages;

use App\Filament\Resources\PencariKerjas\PencariKerjaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListPencariKerjas extends ListRecords
{
    protected static string $resource = PencariKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pencari Kerja')
                ->icon(Heroicon::PlusCircle),
        ];
    }
}
