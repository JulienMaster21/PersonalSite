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
        return $user->roles()->first()->permissions()->where('name', '=', 'view_blok')->first();
    }

    /**
     * Determine whether the user can create bloks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->roles()->first()->permissions()->where('name', '=', 'create_blok')->first();
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
        return $user->roles()->first()->permissions()->where('name', '=', 'update_blok')->first();
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
        return $user->roles()->first()->permissions()->where('name', '=', 'delete_blok')->first();
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
