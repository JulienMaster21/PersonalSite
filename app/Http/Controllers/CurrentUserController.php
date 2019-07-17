<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrentUserController extends Controller
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

    function getUserPage () {
        $user = Auth::user();
        return view("pages/userPage", [
            'user' => $user,
        ]);
    }

    function logOut () {
        Auth::logout();
    }
}
