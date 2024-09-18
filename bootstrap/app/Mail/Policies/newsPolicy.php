<?php

namespace App\Policies;

use App\Models\User;
use App\Models\news;
use Illuminate\Auth\Access\Response;

class newsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
      return $user->hasRole(3);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, news $news): bool
    {
        return true; 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(3);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, news $news): bool
    {
        return $user->hasRole(3);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, news $news): bool
    {
        return $user->hasRole(3);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, news $news): bool
    {
        return $user->hasRole(3);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, news $news): bool
    {
        return $user->hasRole(3);
    }
}
