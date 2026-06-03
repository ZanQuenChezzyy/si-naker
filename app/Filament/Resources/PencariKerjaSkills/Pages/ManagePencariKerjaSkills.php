<?php

namespace App\Filament\Resources\PencariKerjaSkills\Pages;

use App\Filament\Resources\PencariKerjaSkills\PencariKerjaSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePencariKerjaSkills extends ManageRecords
{
    protected static string $resource = PencariKerjaSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
