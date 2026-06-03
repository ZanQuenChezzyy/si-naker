<?php

namespace App\Filament\Resources\PencariKerjas;

use App\Filament\Resources\PencariKerjas\Pages\CreatePencariKerja;
use App\Filament\Resources\PencariKerjas\Pages\EditPencariKerja;
use App\Filament\Resources\PencariKerjas\Pages\ListPencariKerjas;
use App\Filament\Resources\PencariKerjas\Pages\ViewPencariKerja;
use App\Filament\Resources\PencariKerjas\Schemas\PencariKerjaForm;
use App\Filament\Resources\PencariKerjas\Schemas\PencariKerjaInfolist;
use App\Filament\Resources\PencariKerjas\Tables\PencariKerjasTable;
use App\Models\PencariKerja;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PencariKerjaResource extends Resource
{
    protected static ?string $model = PencariKerja::class;
    protected static string|UnitEnum|null $navigationGroup = 'Layanan Pencari Kerja';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::UserGroup;

    public static function getNavigationLabel(): string
    {
        return 'Pencari Kerja';
    }

    public static function getModelLabel(): string
    {
        return 'Pencari Kerja';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Pencari Kerja';
    }

    protected static ?string $recordTitleAttribute = 'nama';
    protected static ?int $navigationSort = 11;
    protected static ?string $slug = 'pencari-kerja';

    public static function form(Schema $schema): Schema
    {
        return PencariKerjaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PencariKerjaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PencariKerjasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPencariKerjas::route('/'),
            'create' => CreatePencariKerja::route('/create'),
            'view' => ViewPencariKerja::route('/{record}'),
            'edit' => EditPencariKerja::route('/{record}/edit'),
        ];
    }
}
