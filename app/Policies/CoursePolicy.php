<?php

namespace App\Policies;

use App\User;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function view(User $user, Course $course)
    {
        $can_view = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'view_course')) {
                $can_view = true;
            }
        }

        return $can_view;
    }

    /**
     * Determine whether the user can create courses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $can_create = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'create_course')) {
                $can_create = true;
            }
        }

        return $can_create;
    }

    /**
     * Determine whether the user can update the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function update(User $user, Course $course)
    {
        $can_update = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'update_course')) {
                $can_update = true;
            }
        }

        return $can_update;
    }

    /**
     * Determine whether the user can delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function delete(User $user, Course $course)
    {
        $can_delete = null;
        $roles = $user->roles()->get();

        foreach ($roles as $role) {
            if ($role->permissions()->get()->contains('name', '=', 'delete_course')) {
                $can_delete = true;
            }
        }

        return $can_delete;
    }

    /**
     * Determine whether the user can restore the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function restore(User $user, Course $course)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the courses.
     *
     * @param  \App\User  $user
     * @param  \App\Course  $course
     * @return mixed
     */
    public function forceDelete(User $user, Course $course)
    {
        //
    }
}
