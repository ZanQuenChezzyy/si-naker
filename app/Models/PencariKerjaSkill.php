<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'pencari_kerja_id',
    'skill_id',
])]
// #[Hidden(['kolom_rahasia'])]
class PencariKerjaSkill extends Model
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

    public function pencariKerja()
    {
        return $this->belongsTo(PencariKerja::class, 'pencari_kerja_id', 'id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }
}
