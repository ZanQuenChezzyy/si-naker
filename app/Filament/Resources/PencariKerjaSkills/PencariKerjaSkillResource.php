<?php

namespace App\Filament\Resources\PencariKerjaSkills;

use App\Filament\Resources\PencariKerjaSkills\Pages\ManagePencariKerjaSkills;
use App\Models\PencariKerjaSkill;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class PencariKerjaSkillResource extends Resource
{
    protected static ?string $model = PencariKerjaSkill::class;
    protected static bool $shouldRegisterNavigation = false;

    protected static string|UnitEnum|null $navigationGroup = 'Data Master';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPuzzlePiece;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::PuzzlePiece;

    public static function getNavigationLabel(): string
    {
        return 'Relasi Skill';
    }

    public static function getModelLabel(): string
    {
        return 'Relasi Skill';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Data Relasi Pencari Kerja & Skill';
    }

    protected static ?int $navigationSort = 23;
    protected static ?string $slug = 'pencari-kerja-skills';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('pencari_kerja_id')
                    ->required()
                    ->numeric(),
                TextInput::make('skill_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('pencari_kerja_id')
                    ->numeric(),
                TextEntry::make('skill_id')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pencari_kerja_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('skill_id')
                    ->numeric()
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

    public static function getPages(): array
    {
        return [
            'index' => ManagePencariKerjaSkills::route('/'),
        ];
    }
}
