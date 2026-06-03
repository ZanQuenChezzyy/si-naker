<?php

namespace App\Policies;

use App\Models\User;
use App\Models\KartuAk1;

class KartuAk1Policy
{
    public function viewAny(User $user): bool
    {
        return $user->can('View Any Kartu Ak1');
    }

    public function view(User $user, KartuAk1 $model): bool
    {
        return $user->can('View Kartu Ak1');
    }

    public function create(User $user): bool
    {
        return $user->can('Create Kartu Ak1');
    }

    public function update(User $user, KartuAk1 $model): bool
    {
        return $user->can('Update Kartu Ak1');
    }

    public function delete(User $user, KartuAk1 $model): bool
    {
        return $user->can('Delete Kartu Ak1');
    }

    public function restore(User $user, KartuAk1 $model): bool
    {
        return $user->can('Restore Kartu Ak1');
    }

    public function forceDelete(User $user, KartuAk1 $model): bool
    {
        return $user->can('Force Delete Kartu Ak1');
    }
}