<?php

namespace App\Policies;

use App\Models\ExecutiveEducation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ExecutiveEducationPolicy
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
    public function view(User $user, ExecutiveEducation $executiveEducation): bool
    {
        return true; // Allow all users to view individual ExecutiveEducation models
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(1); // Allow only users with role id 1 to create ExecutiveEducation models
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ExecutiveEducation $executiveEducation): bool
    {
        return $user->hasRole(1); // Allow only users with role id 1 to update ExecutiveEducation models
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ExecutiveEducation $executiveEducation): bool
    {
        return $user->hasRole(1); // Allow only users with role id 1 to delete ExecutiveEducation models
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ExecutiveEducation $executiveEducation): bool
    {
        return $user->hasRole(1); // Allow only users with role id 1 to restore ExecutiveEducation models
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ExecutiveEducation $executiveEducation): bool
    {
        return $user->hasRole(1); // Allow only users with role id 1 to permanently delete ExecutiveEducation models
    }
}
