<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nik',
    'nama',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'no_hp',
    'email',
    'pendidikan_id',
    'status_kerja',
    'tanggal_daftar',
    'pas_photo',
])]
// #[Hidden(['kolom_rahasia'])]
class PencariKerja extends Model
{
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'tanggal_daftar' => 'date',
        ];
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function skills()
    {
        return $this->belongsToMany(
            Skill::class,
            'pencari_kerja_skills'
        );
    }

    public function kartuAk1()
    {
        return $this->hasOne(KartuAk1::class);
    }
}
