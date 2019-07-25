<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class PageController extends Controller
{
    function getHome (User $user, Role $role) {
        return view("pages/home", [
            'user' => $user,
            'role' => $role,
        ]);
    }

    function getAbout (User $user, Role $role) {
        return view("pages/about", [
            'user' => $user,
            'role' => $role,
        ]);
    }

    function getCareerResearch (User $user, Role $role) {
        return view("pages/careerResearch", [
            'user' => $user,
            'role' => $role,
        ]);
    }

    function getMotivation (User $user, Role $role) {
        return view("pages/motivation", [
            'user' => $user,
            'role' => $role,
        ]);
    }

    function getEmperor () {
        return view("pages/emperor");
    }

    function getContact () {
        return view("pages/contact");
    }

    function get403 () {
        abort(403);
    }

    function get500 () {
        abort(500);
    }

    function get419 () {
        abort(419);
    }
}
