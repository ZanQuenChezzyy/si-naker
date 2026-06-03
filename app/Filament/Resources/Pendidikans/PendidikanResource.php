<?php

namespace App\Filament\Resources\Pendidikans;

use App\Filament\Resources\Pendidikans\Pages\ManagePendidikans;
use App\Models\Pendidikan;
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

class PendidikanResource extends Resource
{
    protected static ?string $model = Pendidikan::class;
    protected static string|UnitEnum|null $navigationGroup = 'Data Master';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::AcademicCap;

    public static function getNavigationLabel(): string
    {
        return 'Pendidikan';
    }

    public static function getModelLabel(): string
    {
        return 'Pendidikan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Data Pendidikan';
    }

    protected static ?string $recordTitleAttribute = 'jenjang';
    protected static ?int $navigationSort = 21;
    protected static ?string $slug = 'pendidikan';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Pendidikan')
                    ->description('Masukkan tingkat jenjang pendidikan.')
                    ->schema([
                        TextInput::make('jenjang')
                            ->required()
                            ->placeholder('Misal: S1 Sistem Informasi')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('jenjang'),
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
                TextColumn::make('jenjang')
                    ->searchable()
                    ->weight('bold')
                    ->sortable(),
                // Menampilkan berapa banyak pencari kerja yang memiliki pendidikan ini
                TextColumn::make('pencariKerjas_count')
                    ->counts('pencariKerjas')
                    ->label('Total Alumni')
                    ->badge(),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ManagePendidikans::route('/'),
        ];
    }
}
