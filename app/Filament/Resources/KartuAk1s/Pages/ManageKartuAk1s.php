<?php

namespace App\Filament\Resources\KartuAk1s\Pages;

use App\Filament\Resources\KartuAk1s\KartuAk1Resource;
// use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageKartuAk1s extends ManageRecords
{
    protected static string $resource = KartuAk1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
