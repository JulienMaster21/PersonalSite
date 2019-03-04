<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Test;

class TestController extends Controller
{
    function index () {
        return view("pages/dashboard");
    }

    function create (Request $request) {
        $test = new Test;

        $test->blok = $request->blok;
        $test->cursus = $request->cursus;
        $test->subject = $request->subject;
        $test->completed = $request->completed;
        $test->grade = $request->grade;
        $test->EC = $request->EC;

        $test->save();

        return redirect()->route("dashboard");
    }

    function update (Request $request) {
        $test = \App\Test::find($request->id);

        $test->blok = $request->blok;
        $test->cursus = $request->cursus;
        $test->subject = $request->subject;
        $test->completed = $request->completed;
        $test->grade = $request->grade;
        $test->EC = $request->EC;

        $test->save();

        return redirect()->route("dashboard");
    }

    function delete (Request $request) {
        \App\Test::find($request->id)
                    ->delete();

        return redirect()->route("dashboard");
    }
}
