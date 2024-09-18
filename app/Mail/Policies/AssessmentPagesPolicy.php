<?php

namespace App\Policies;

use App\Models\AssessmentPages;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AssessmentPagesPolicy
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
    public function view(User $user, AssessmentPages $assessmentPages): bool
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
    public function update(User $user, AssessmentPages $assessmentPages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AssessmentPages $assessmentPages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AssessmentPages $assessmentPages): bool
    {
        return $user->hasRole(1);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AssessmentPages $assessmentPages): bool
    {
        return $user->hasRole(1);
    }
}
