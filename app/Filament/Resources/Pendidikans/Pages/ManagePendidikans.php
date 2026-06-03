<?php

namespace App\Filament\Resources\Pendidikans\Pages;

use App\Filament\Resources\Pendidikans\PendidikanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePendidikans extends ManageRecords
{
    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
