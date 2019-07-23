<?php

namespace App\Policies;

use App\User;
use App\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function view(User $user, Role $role)
    {
        $can_view = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('slug', '=', 'view_role')) {
                $can_view = true;
            }
        }

        return $can_view;
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $can_create = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('slug', '=', 'create_role')) {
                $can_create = true;
            }
        }

        return $can_create;
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function update(User $user, Role $role)
    {
        $can_update = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('slug', '=', 'update_role')) {
                $can_update = true;
            }
        }

        return $can_update;
    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function delete(User $user, Role $role)
    {
        $can_delete = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('slug', '=', 'delete_role')) {
                $can_delete = true;
            }
        }

        return $can_delete;
    }

    /**
     * Determine whether the user can restore the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function restore(User $user, Role $role)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\Role  $role
     * @return mixed
     */
    public function forceDelete(User $user, Role $role)
    {
        //
    }
}
