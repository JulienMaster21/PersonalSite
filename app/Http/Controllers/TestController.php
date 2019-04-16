<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Test;
use \App\Blok;
use \App\Course;

class TestController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloks = Blok::all();
        $courses = Course::all();
        $tests = Test::all();
        // $currentBlok = 0;
        // $currentEC = 0;
        // $maxEC = 0;
        // $bloks = [];
        // foreach ($tests as $test) {
        //     if ($test->blok != $currentBlok) {
        //         array_push($bloks, $test->blok);
        //         $currentBlok = $test->blok;
        //     }
        //     if ($test->completed) {
        //         $currentEC += $test->EC;
        //     }
        //     $maxEC += $test->EC;
        // }
        // $ECValues = [
        //     $currentEC,
        //     $maxEC
        // ];
        return view("pages/tests.index",  [
                                            "bloks" => $bloks,
                                            "courses" => $courses,
                                            "tests" => $tests,
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
        $validatedData = $request->validate(
            [
                "blok" => "required|digits_between:1,2|string",
                "cursus" => "required|max:255|string",
                "subject" => "required|max:255|string",
                "completed" => "required|in:true,false|string",
                "grade" => "nullable|max:5",
                "EC" => "required|max:5",
            ]
        );

        $test = new Test;

        $test->blok = $validatedData["blok"];
        $test->cursus = $validatedData["cursus"];
        $test->subject = $validatedData["subject"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];

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
        $validatedData = $request->validate([
            "blok" => "required|digits_between:1,2|string",
            "cursus" => "required|max:255|string",
            "subject" => "required|max:255|string",
            "completed" => "required|in:true,false|string",
            "grade" => "nullable|max:5",
            "EC" => "required|max:5",
        ]);

        $test = Test::find($id);

        $test->blok = $validatedData["blok"];
        $test->cursus = $validatedData["cursus"];
        $test->subject = $validatedData["subject"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];

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
