<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PageController extends Controller
{
    function getHome (User $user) {
        return view("pages/home", [
            'user' => $user,
        ]);
    }

    function getAbout (User $user) {
        return view("pages/about", [
            'user' => $user,
        ]);
    }

    function getBeroepsbeeld (User $user) {
        return view("pages/beroepsbeeld", [
            'user' => $user,
        ]);
    }

    function getMotivatie (User $user) {
        return view("pages/motivatie", [
            'user' => $user,
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
