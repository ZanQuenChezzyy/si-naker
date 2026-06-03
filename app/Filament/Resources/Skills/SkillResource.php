<?php

namespace App\Filament\Resources\Skills;

use App\Filament\Resources\Skills\Pages\ManageSkills;
use App\Models\Skill;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use UnitEnum;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;
    protected static string|UnitEnum|null $navigationGroup = 'Data Master';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSparkles;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::Sparkles;

    public static function getNavigationLabel(): string
    {
        return 'Keahlian (Skill)';
    }

    public static function getModelLabel(): string
    {
        return 'Keahlian';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Data Keahlian';
    }

    protected static ?string $recordTitleAttribute = 'nama';
    protected static ?int $navigationSort = 22;
    protected static ?string $slug = 'skills';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Keahlian / Skill')
                    ->schema([
                        TextInput::make('nama')
                            ->required()
                            ->placeholder('Misal: Pemrograman Web, Desain Grafis')
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('success'),
                TextColumn::make('pencariKerjas_count')
                    ->counts('pencariKerjas')
                    ->label('Dimiliki Oleh (Orang)')
                    ->badge()
                    ->color('primary'),
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
            'index' => ManageSkills::route('/'),
        ];
    }
}
