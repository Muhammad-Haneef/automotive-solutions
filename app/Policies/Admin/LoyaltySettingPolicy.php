<?php

namespace App\Policies\Admin;

use App\Models\Admin\LoyaltySetting;
use App\Models\Admin\User;
use Illuminate\Auth\Access\Response;

class LoyaltySettingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, LoyaltySetting $loyaltySetting): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, LoyaltySetting $loyaltySetting): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, LoyaltySetting $loyaltySetting): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, LoyaltySetting $loyaltySetting): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, LoyaltySetting $loyaltySetting): bool
    {
        return false;
    }
}
