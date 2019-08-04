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
        $this->middleware('verified');
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

    function deleteUser () {
        $user = Auth::user();

        // Remove all roles from user
        $user->roles()->detach();

        $user->delete();

        return redirect()->route('home');
    }
}
