<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function getHome () {
        return view("pages/home");
    }

    function getAbout () {
        return view("pages/about");
    }

    function getBeroepsbeeld () {
        return view("pages/beroepsbeeld");
    }

    function getMotivatie () {
        return view("pages/motivatie");
    }

    function getEmperor () {
        return view("pages/emperor");
    }

    function getContact () {
        return view("pages/contact");
    }

    function getUserPage () {
        $user = Auth::user();
        return view("pages/userPage", [
            'user' => $user,
        ]);
    }

    function logOut () {
        Auth::logout();
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
