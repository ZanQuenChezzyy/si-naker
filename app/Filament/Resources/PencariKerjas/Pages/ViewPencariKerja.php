<?php

namespace App\Filament\Resources\PencariKerjas\Pages;

use App\Filament\Resources\PencariKerjas\PencariKerjaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPencariKerja extends ViewRecord
{
    protected static string $resource = PencariKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
