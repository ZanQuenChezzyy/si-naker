<?php

namespace App\Filament\Resources\PencariKerjas\Pages;

use App\Filament\Resources\PencariKerjas\PencariKerjaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPencariKerja extends EditRecord
{
    protected static string $resource = PencariKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
