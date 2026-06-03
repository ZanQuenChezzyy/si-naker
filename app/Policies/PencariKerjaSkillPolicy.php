<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PencariKerjaSkill;

class PencariKerjaSkillPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('View Any Pencari Kerja Skill');
    }

    public function view(User $user, PencariKerjaSkill $model): bool
    {
        return $user->can('View Pencari Kerja Skill');
    }

    public function create(User $user): bool
    {
        return $user->can('Create Pencari Kerja Skill');
    }

    public function update(User $user, PencariKerjaSkill $model): bool
    {
        return $user->can('Update Pencari Kerja Skill');
    }

    public function delete(User $user, PencariKerjaSkill $model): bool
    {
        return $user->can('Delete Pencari Kerja Skill');
    }

    public function restore(User $user, PencariKerjaSkill $model): bool
    {
        return $user->can('Restore Pencari Kerja Skill');
    }

    public function forceDelete(User $user, PencariKerjaSkill $model): bool
    {
        return $user->can('Force Delete Pencari Kerja Skill');
    }
}