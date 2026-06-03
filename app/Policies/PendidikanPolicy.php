<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pendidikan;

class PendidikanPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('View Any Pendidikan');
    }

    public function view(User $user, Pendidikan $model): bool
    {
        return $user->can('View Pendidikan');
    }

    public function create(User $user): bool
    {
        return $user->can('Create Pendidikan');
    }

    public function update(User $user, Pendidikan $model): bool
    {
        return $user->can('Update Pendidikan');
    }

    public function delete(User $user, Pendidikan $model): bool
    {
        return $user->can('Delete Pendidikan');
    }

    public function restore(User $user, Pendidikan $model): bool
    {
        return $user->can('Restore Pendidikan');
    }

    public function forceDelete(User $user, Pendidikan $model): bool
    {
        return $user->can('Force Delete Pendidikan');
    }
}