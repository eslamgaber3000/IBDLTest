<?php

namespace App\Policies;

use App\Models\User;
use App\Models\pages;
use Illuminate\Auth\Access\Response;

class pagesPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, pages $pages): bool
    {
        return true; 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, pages $pages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, pages $pages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, pages $pages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, pages $pages): bool
    {
        return $user->hasRole(1);
    }
}
