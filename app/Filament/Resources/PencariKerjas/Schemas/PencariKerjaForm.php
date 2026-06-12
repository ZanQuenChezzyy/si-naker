<?php

namespace App\Filament\Resources\PencariKerjas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PencariKerjaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        // Kolom Kiri (Takes up 2/3 space)
                        Grid::make(1)->schema([
                            Section::make('Informasi Pribadi')
                                ->description('Kelola identitas dan data diri pencari kerja.')
                                ->icon('heroicon-o-user')
                                ->schema([
                                    TextInput::make('nik')
                                        ->label('Nomor Induk Kependudukan (NIK)')
                                        ->required()
                                        ->tel() // Mengganti numeric(), ini akan memunculkan numpad/keyboard angka di HP
                                        ->rules(['digits:16']) // Validasi Laravel: memastikan murni angka dan pas 16 digit
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->prefixIcon('heroicon-m-identification')
                                        ->placeholder('Misal: 3201012345678901')
                                        ->helperText('Pastikan NIK terdiri dari 16 digit angka sesuai KTP.'),

                                    TextInput::make('nama')
                                        ->label('Nama Lengkap')
                                        ->required()
                                        ->maxLength(255)
                                        ->prefixIcon('heroicon-m-user')
                                        ->placeholder('Misal: Budi Santoso')
                                        ->helperText('Sesuai dengan nama yang tertera di KTP.'),

                                    Grid::make(2)->schema([
                                        TextInput::make('tempat_lahir')
                                            ->label('Tempat Lahir')
                                            ->prefixIcon('heroicon-m-map-pin')
                                            ->placeholder('Misal: Jakarta'),

                                        DatePicker::make('tanggal_lahir')
                                            ->label('Tanggal Lahir')
                                            ->native(false)
                                            ->displayFormat('d M Y')
                                            ->placeholder('Pilih tanggal lahir')
                                            ->prefixIcon('heroicon-m-calendar-days')
                                            ->maxDate(now()), // Mencegah user memilih tanggal di masa depan
                                    ]),

                                    Select::make('jenis_kelamin')
                                        ->label('Jenis Kelamin')
                                        ->options([
                                            'Laki-laki' => 'Laki-laki',
                                            'Perempuan' => 'Perempuan'
                                        ])
                                        ->native(false)
                                        ->placeholder('Pilih jenis kelamin')
                                        ->prefixIcon('heroicon-m-users'),
                                ])->columns(2),

                            Section::make('Kontak & Alamat')
                                ->icon('heroicon-o-map')
                                ->schema([
                                    TextInput::make('no_hp')
                                        ->label('Nomor Handphone / WhatsApp')
                                        ->tel()
                                        ->prefixIcon('heroicon-m-phone')
                                        ->placeholder('Misal: 081234567890'),

                                    TextInput::make('email')
                                        ->label('Alamat Email')
                                        ->email()
                                        ->prefixIcon('heroicon-m-envelope')
                                        ->placeholder('Misal: budi.santoso@gmail.com'),

                                    Textarea::make('alamat')
                                        ->label('Alamat Domisili')
                                        ->columnSpanFull()
                                        ->autosize() // Textarea akan otomatis memanjang ke bawah saat diketik
                                        ->placeholder('Masukkan alamat lengkap beserta RT/RW, Desa/Kelurahan, dan Kecamatan...'),
                                ])->columns(2),
                        ])->columnSpan(2),

                        // Kolom Kanan (Takes up 1/3 space)
                        Grid::make(1)->schema([
                            Section::make('Pendidikan & Pekerjaan')
                                ->icon('heroicon-o-academic-cap')
                                ->schema([
                                    FileUpload::make('pas_photo')
                                        ->label('Pas Foto 3x4')
                                        ->image()
                                        ->disk('public') // Simpan di storage/app/public
                                        ->directory('pas-photo-pencaker')
                                        ->maxSize(2048)
                                        ->helperText('Unggah pas foto resmi ukuran 3x4 (Maks 2MB).'),
                                    Select::make('pendidikan_id')
                                        ->label('Pendidikan Terakhir')
                                        ->relationship('pendidikan', 'jenjang')
                                        ->searchable()
                                        ->preload()
                                        ->placeholder('Cari atau pilih tingkat pendidikan...')
                                        ->createOptionForm([
                                            TextInput::make('jenjang')
                                                ->label('Jenjang Pendidikan')
                                                ->placeholder('Misal: S1 Teknik Informatika')
                                                ->required()
                                        ])
                                        ->required(),

                                    Select::make('status_kerja')
                                        ->label('Status Saat Ini')
                                        ->options([
                                            'Aktif' => 'Aktif (Mencari Kerja)',
                                            'Sudah Bekerja' => 'Sudah Bekerja'
                                        ])
                                        ->default('Aktif')
                                        ->native(false)
                                        ->placeholder('Pilih status saat ini')
                                        ->required(),

                                    DatePicker::make('tanggal_daftar')
                                        ->label('Tanggal Pendaftaran')
                                        ->default(now())
                                        ->native(false)
                                        ->displayFormat('d M Y')
                                        ->placeholder('Pilih tanggal daftar')
                                        ->prefixIcon('heroicon-m-calendar'),

                                    Select::make('skills')
                                        ->label('Keahlian (Skills)')
                                        ->relationship('skills', 'nama')
                                        ->multiple()
                                        ->preload()
                                        ->searchable()
                                        ->placeholder('Cari & pilih keahlian...')
                                        ->helperText('Anda bisa memilih lebih dari satu keahlian.')
                                        // Opsional: Bolehkan user menambah skill baru langsung dari sini
                                        ->createOptionForm([
                                            TextInput::make('nama')
                                                ->label('Nama Keahlian')
                                                ->placeholder('Misal: Desain Grafis, Web Developer')
                                                ->required()
                                        ]),
                                ]),
                        ])->columnSpan(1),
                    ])->columnSpanFull(),
            ]);
    }
}
