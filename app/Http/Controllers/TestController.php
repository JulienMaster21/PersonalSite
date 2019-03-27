<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view("pages/tests.index",  [
                                            "tests" => $tests,
                                            "ECValues" => $ECValues,
                                            "bloks" => $bloks
                                        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages/tests.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new Test;

        $test->blok = $request->blok;
        $test->cursus = $request->cursus;
        $test->subject = $request->subject;
        $test->completed = $request->completed ? 1 : 0;
        $test->grade = $request->grade;
        $test->EC = $request->EC;

        $test->save();

        return redirect("tests");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);
        return view("pages/tests.show", ["test" => $test]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);
        return view("pages/tests.edit", ["test" => $test]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = Test::find($id);

        $test->blok = $request->blok;
        $test->cursus = $request->cursus;
        $test->subject = $request->subject;
        $test->completed = $request->completed ? 1 : 0;
        $test->grade = $request->grade;
        $test->EC = $request->EC;

        $test->save();

        return redirect("tests");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Test::find($id)->delete();

        return redirect("tests");
    }
}
