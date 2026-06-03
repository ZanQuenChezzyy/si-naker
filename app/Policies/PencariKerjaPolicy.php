<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PencariKerja;

class PencariKerjaPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('View Any Pencari Kerja');
    }

    public function view(User $user, PencariKerja $model): bool
    {
        return $user->can('View Pencari Kerja');
    }

    public function create(User $user): bool
    {
        return $user->can('Create Pencari Kerja');
    }

    public function update(User $user, PencariKerja $model): bool
    {
        return $user->can('Update Pencari Kerja');
    }

    public function delete(User $user, PencariKerja $model): bool
    {
        return $user->can('Delete Pencari Kerja');
    }

    public function restore(User $user, PencariKerja $model): bool
    {
        return $user->can('Restore Pencari Kerja');
    }

    public function forceDelete(User $user, PencariKerja $model): bool
    {
        return $user->can('Force Delete Pencari Kerja');
    }
}