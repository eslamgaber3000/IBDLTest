<?php

namespace App\Policies;

use App\Models\TrainerAccreditation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TrainerAccreditationPolicy
{
    /**
     * Determine whether the user can view any models.
     */

        public function viewAny(User $user): bool
        {
          return $user->hasRole(2);
        }
    
   

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TrainerAccreditation $trainerAccreditation): bool
    {
        return true; 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TrainerAccreditation $trainerAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TrainerAccreditation $trainerAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TrainerAccreditation $trainerAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TrainerAccreditation $trainerAccreditation): bool
    {
        return $user->hasRole(2);
    }
}
