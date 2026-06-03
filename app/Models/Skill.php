<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama',
])]
// #[Hidden(['kolom_rahasia'])]
class Skill extends Model
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
            // 'created_at' => 'datetime',
            // 'is_active' => 'boolean',
        ];
    }

    public function pencariKerjas()
    {
        return $this->belongsToMany(
            PencariKerja::class,
            'pencari_kerja_skills'
        );
    }
}
