<?php

namespace App\Filament\Resources\KartuAk1s;

use App\Filament\Resources\KartuAk1s\Pages\ManageKartuAk1s;
use App\Models\KartuAk1;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use UnitEnum;

class KartuAk1Resource extends Resource
{
    protected static ?string $model = KartuAk1::class;
    protected static string|UnitEnum|null $navigationGroup = 'Layanan Pencari Kerja';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::Identification;

    public static function getNavigationLabel(): string
    {
        return 'Kartu AK-1';
    }

    public static function getModelLabel(): string
    {
        return 'Kartu AK-1';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Kartu AK-1';
    }

    protected static ?string $recordTitleAttribute = 'nomor_ak1';
    protected static ?int $navigationSort = 12;
    protected static ?string $slug = 'kartu-ak1';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        // Kolom Kiri: Informasi Utama Dokumen
                        Grid::make(1)->schema([
                            Section::make('Informasi Dokumen')
                                ->description('Pilih pemilik kartu dan masukkan detail nomor serta file dokumen fisik.')
                                ->icon('heroicon-o-document-text')
                                ->schema([
                                    Select::make('pencari_kerja_id')
                                        ->relationship('pencariKerja', 'nama')
                                        ->label('Nama Pencari Kerja')
                                        ->searchable()
                                        ->preload()
                                        ->prefixIcon('heroicon-m-user')
                                        ->placeholder('Cari nama pencari kerja...')
                                        ->columnSpanFull()
                                        ->required(),

                                    TextInput::make('nomor_ak1')
                                        ->label('Nomor AK-1')
                                        ->required()
                                        ->unique(ignoreRecord: true)
                                        ->prefixIcon('heroicon-m-hashtag')
                                        ->readOnly() // <--- KUNCI FIELD INI
                                        ->helperText('Nomor ini dibuat otomatis oleh sistem dan tidak dapat diubah.')
                                        ->columnSpanFull()
                                        ->maxLength(255),

                                    FileUpload::make('file_pdf')
                                        ->label('File Scan AK-1 (PDF)')
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->directory('dokumen-ak1')
                                        ->maxSize(5120) // Maks 5MB
                                        ->helperText('Unggah hasil scan Kartu AK-1 berformat .pdf (Maks 5MB)')
                                        ->columnSpanFull(),
                                ])->columns(2),
                        ])->columnSpan(2), // Mengambil 2/3 layar

                        // Kolom Kanan: Masa Berlaku
                        Grid::make(1)->schema([
                            Section::make('Masa Berlaku')
                                ->description('Atur rentang waktu aktif kartu.')
                                ->icon('heroicon-o-calendar')
                                ->schema([
                                    DatePicker::make('tanggal_terbit')
                                        ->label('Tanggal Terbit')
                                        ->native(false)
                                        ->displayFormat('d M Y')
                                        ->prefixIcon('heroicon-m-calendar-days')
                                        ->placeholder('Pilih tanggal terbit')
                                        ->default(now())
                                        ->required()
                                        ->columnSpanFull(),

                                    DatePicker::make('tanggal_berlaku')
                                        ->label('Tanggal Berakhir (Expired)')
                                        ->native(false)
                                        ->displayFormat('d M Y')
                                        ->prefixIcon('heroicon-m-calendar-days')
                                        ->placeholder('Pilih masa berakhir')
                                        ->helperText('Biasanya berlaku 2 tahun sejak diterbitkan.')
                                        ->required()
                                        ->columnSpanFull(),
                                ]),
                        ])->columnSpan(1), // Mengambil 1/3 layar
                    ])->columnSpanFull(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Kartu AK-1')
                    ->icon('heroicon-o-identification')
                    ->schema([
                        TextEntry::make('pencariKerja.nama')
                            ->label('Pemilik Kartu')
                            ->weight('bold'),

                        TextEntry::make('nomor_ak1')
                            ->label('Nomor AK-1')
                            ->copyable()
                            ->copyMessage('Nomor AK-1 berhasil disalin!')
                            ->icon('heroicon-m-document-duplicate'),

                        TextEntry::make('tanggal_terbit')
                            ->label('Tanggal Terbit')
                            ->date('d F Y')
                            ->placeholder('-'),

                        TextEntry::make('tanggal_berlaku')
                            ->label('Masa Berlaku')
                            ->date('d F Y')
                            ->badge()
                            ->color(fn(string $state): string => Carbon::parse($state)->isFuture() ? 'success' : 'danger')
                            ->placeholder('-'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pencariKerja.nama')
                    ->label('Nama Pemilik')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-m-user'),

                TextColumn::make('nomor_ak1')
                    ->label('No. AK-1')
                    ->searchable()
                    ->copyable()
                    ->fontFamily('mono'), // Mengubah font menjadi monospace untuk nomor seri

                TextColumn::make('tanggal_terbit')
                    ->label('Tgl. Terbit')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('tanggal_berlaku')
                    ->label('Berlaku Sampai')
                    ->date('d M Y')
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => Carbon::parse($state)->isFuture() ? 'success' : 'danger'),
            ])
            ->filters([
                // Filter tambahan untuk memilah status kartu dengan mudah
                TernaryFilter::make('status_berlaku')
                    ->label('Status Masa Berlaku')
                    ->placeholder('Semua Kartu')
                    ->trueLabel('Masih Aktif')
                    ->falseLabel('Sudah Kadaluarsa (Expired)')
                    ->queries(
                        true: fn(Builder $query) => $query->whereDate('tanggal_berlaku', '>=', now()),
                        false: fn(Builder $query) => $query->whereDate('tanggal_berlaku', '<', now()),
                        blank: fn(Builder $query) => $query,
                    )
            ])
            ->recordActions([
                // Action untuk melihat PDF secara langsung
                Action::make('cetak_pdf')
                    ->label('Cetak PDF')
                    ->icon('heroicon-o-printer')
                    ->color('success')
                    ->url(fn(KartuAk1 $record) => route('cetak.ak1', $record->id))
                    ->openUrlInNewTab(),

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
            'index' => ManageKartuAk1s::route('/'),
        ];
    }
}
