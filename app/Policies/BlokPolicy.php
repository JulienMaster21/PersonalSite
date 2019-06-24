<?php

namespace App\Policies;

use App\User;
use App\Blok;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlokPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the bloks.
     *
     * @param  \App\User  $user
     * @param  \App\Blok  $blok
     * @return mixed
     */
    public function view(User $user, Blok $blok)
    {
        $can_view = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'view_blok')) {
                $can_view = true;
            }
        }

        return $can_view;
    }

    /**
     * Determine whether the user can create bloks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $can_create = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'create_blok')) {
                $can_create = true;
            }
        }

        return $can_create;
    }

    /**
     * Determine whether the user can update the bloks.
     *
     * @param  \App\User  $user
     * @param  \App\Blok  $blok
     * @return mixed
     */
    public function update(User $user, Blok $blok)
    {
        $can_update = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'update_blok')) {
                $can_update = true;
            }
        }

        return $can_update;
    }

    /**
     * Determine whether the user can delete the bloks.
     *
     * @param  \App\User  $user
     * @param  \App\Blok  $blok
     * @return mixed
     */
    public function delete(User $user, Blok $blok)
    {
        $can_delete = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'delete_blok')) {
                $can_delete = true;
            }
        }

        return $can_delete;
    }

    /**
     * Determine whether the user can restore the bloks.
     *
     * @param  \App\User  $user
     * @param  \App\Blok  $blok
     * @return mixed
     */
    public function restore(User $user, Blok $blok)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the bloks.
     *
     * @param  \App\User  $user
     * @param  \App\Blok  $blok
     * @return mixed
     */
    public function forceDelete(User $user, Blok $blok)
    {
        //
    }
}
