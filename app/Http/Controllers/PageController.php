<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    function logOut () {
        Auth::logout();
    }
}
