<?php

namespace App\Policies;

use App\Models\CorporateAccreditation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CorporateAccreditationPolicy
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
    public function view(User $user, CorporateAccreditation $corporateAccreditation): bool
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
    public function update(User $user, CorporateAccreditation $corporateAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CorporateAccreditation $corporateAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CorporateAccreditation $corporateAccreditation): bool
    {
        return $user->hasRole(2);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CorporateAccreditation $corporateAccreditation): bool
    {
        return $user->hasRole(2);
    }
}
