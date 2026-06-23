<?php

namespace App\Policies\Admin;

use App\Models\Admin\PayrollAllowance;
use App\Models\Admin\User;
use Illuminate\Auth\Access\Response;

class PayrollAllowancePolicy
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
    public function view(User $user, PayrollAllowance $payrollAllowance): bool
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
    public function update(User $user, PayrollAllowance $payrollAllowance): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PayrollAllowance $payrollAllowance): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PayrollAllowance $payrollAllowance): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PayrollAllowance $payrollAllowance): bool
    {
        return false;
    }
}
