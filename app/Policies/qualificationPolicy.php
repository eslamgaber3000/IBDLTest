<?php

namespace App\Policies;

use App\Models\User;
use App\Models\qualification;
use Illuminate\Auth\Access\Response;

class qualificationPolicy
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
    public function view(User $user, qualification $qualification): bool
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
    public function update(User $user, qualification $qualification): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, qualification $qualification): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, qualification $qualification): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, qualification $qualification): bool
    {
        return $user->hasRole(1);
    }
}
