<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'pencari_kerja_id',
    'nomor_ak1',
    'tanggal_terbit',
    'tanggal_berlaku',
    'file_pdf',
])]
// #[Hidden(['kolom_rahasia'])]
class KartuAk1 extends Model
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
            'tanggal_terbit' => 'date',
            'tanggal_berlaku' => 'date',
        ];
    }

    public function pencariKerja()
    {
        return $this->belongsTo(PencariKerja::class);
    }
}
