<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        $can_view = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'view_user')) {
                $can_view = true;
            }
        }

        return $can_view;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $can_create = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'create_user')) {
                $can_create = true;
            }
        }

        return $can_create;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        $can_update = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'update_user')) {
                $can_update = true;
            }
        }

        return $can_update;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        $can_delete = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'delete_user')) {
                $can_delete = true;
            }
        }

        return $can_delete;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
