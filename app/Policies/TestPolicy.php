<?php

namespace App\Policies;

use App\User;
use App\Test;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the test.
     *
     * @param  \App\User  $user
     * @param  \App\Test  $test
     * @return mixed
     */
    public function view(User $user, Test $test)
    {
        $can_view = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'view_test')) {
                $can_view = true;
            }
        }

        return $can_view;
    }

    /**
     * Determine whether the user can create test.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $can_create = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'create_test')) {
               $can_create = true;
            }
        }

        return $can_create;
    }

    /**
     * Determine whether the user can update the test.
     *
     * @param  \App\User  $user
     * @param  \App\Test  $test
     * @return mixed
     */
    public function update(User $user, Test $test)
    {
        $can_update = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'update_test')) {
                $can_update = true;
            }
        }

        return $can_update;
    }

    /**
     * Determine whether the user can delete the test.
     *
     * @param  \App\User  $user
     * @param  \App\Test  $test
     * @return mixed
     */
    public function delete(User $user, Test $test)
    {
        $can_delete = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'delete_test')) {
                $can_delete = true;
            }
        }

        return $can_delete;
    }

    /**
     * Determine whether the user can restore the test.
     *
     * @param  \App\User  $user
     * @param  \App\Test  $test
     * @return mixed
     */
    public function restore(User $user, Test $test)
    {

    }

    /**
     * Determine whether the user can permanently delete the test.
     *
     * @param  \App\User  $user
     * @param  \App\Test  $test
     * @return mixed
     */
    public function forceDelete(User $user, Test $test)
    {

    }
}
