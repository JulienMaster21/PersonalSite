<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getIndex () {
        return view("pages/index");
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
}
