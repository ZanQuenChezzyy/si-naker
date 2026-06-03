<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Skill;

class SkillPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('View Any Skill');
    }

    public function view(User $user, Skill $model): bool
    {
        return $user->can('View Skill');
    }

    public function create(User $user): bool
    {
        return $user->can('Create Skill');
    }

    public function update(User $user, Skill $model): bool
    {
        return $user->can('Update Skill');
    }

    public function delete(User $user, Skill $model): bool
    {
        return $user->can('Delete Skill');
    }

    public function restore(User $user, Skill $model): bool
    {
        return $user->can('Restore Skill');
    }

    public function forceDelete(User $user, Skill $model): bool
    {
        return $user->can('Force Delete Skill');
    }
}