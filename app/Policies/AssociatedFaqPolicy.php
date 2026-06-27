<?php

namespace App\Policies;

use App\Models\Admin\AssociatedFaq;
use App\Models\Admin\SystemUser;
use Illuminate\Auth\Access\Response;

class AssociatedFaqPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(SystemUser $systemUser, AssociatedFaq $associatedFaq): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(SystemUser $systemUser): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(SystemUser $systemUser, AssociatedFaq $associatedFaq): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(SystemUser $systemUser, AssociatedFaq $associatedFaq): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(SystemUser $systemUser, AssociatedFaq $associatedFaq): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(SystemUser $systemUser, AssociatedFaq $associatedFaq): bool
    {
        return false;
    }
}
