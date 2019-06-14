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
        return $user->roles()->first()->permissions()->where('name', '=', 'view_test')->first();
    }

    /**
     * Determine whether the user can create test.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->roles()->first()->permissions()->where('name', '=', 'create_test')->first();
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
        return $user->roles()->first()->permissions()->where('name', '=', 'update_test')->first();
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
        return $user->roles()->first()->permissions()->where('name', '=', 'delete_test')->first();
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
