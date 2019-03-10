<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Test;

class TestController extends Controller
{
    function index () {
        $tests = Test::orderBy("blok", "asc")
                            ->orderBy("cursus", "asc")
                            ->get();
        $currentBlok = 0;
        $currentEC = 0;
        $maxEC = 0;
        $bloks = [];
        foreach ($tests as $test) {
            if ($test->blok != $currentBlok) {
                array_push($bloks, $test->blok);
                $currentBlok = $test->blok;
            }
            if ($test->completed) {
                $currentEC += $test->EC;
            }
            $maxEC += $test->EC;
        }
        $ECValues = [
            $currentEC,
            $maxEC
        ];
        return view("pages/dashboard",  [
                                            "tests" => $tests,
                                            "ECValues" => $ECValues,
                                            "bloks" => $bloks
                                        ]);
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
