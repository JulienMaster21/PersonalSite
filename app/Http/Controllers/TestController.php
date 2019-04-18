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
        $ECValues = [];
        $ECmin = 0;
        $ECmax = 0;

        foreach ($tests as $test) {
            if ($test->completed) {
                $ECmin += $test->EC;
            }
            $ECmax += $test->EC;
        }
        array_push($ECValues, $ECmin, $ECmax);

        return view("pages/tests.index",  [
                                            "bloks" => $bloks,
                                            "courses" => $courses,
                                            "tests" => $tests,
                                            "ECValues" => $ECValues,
                                        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view("pages/tests.create", ["courses" => $courses]);
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
                "name" => "required|max:255|string",
                "completed" => "required|in:true,false|string",
                "grade" => "nullable|max:5",
                "EC" => "required|max:5",
                "course_id" => "nullable"
            ]
        );

        $test = new Test;

        $test->name = $validatedData["name"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];
        $test->course_id = $validatedData["course_id"];

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
        $course = $test->course;

        return view("pages/tests.show", [
            "test" => $test,
            "course" => $course,
        ]);
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
        $courses = Course::all();

        return view("pages/tests.edit", [
            "test" => $test,
            "courses" => $courses,
        ]);
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
            "name" => "required|max:255|string",
            "completed" => "required|in:true,false|string",
            "grade" => "nullable|max:5",
            "EC" => "required|max:5",
            "course_id" => "nullable",
        ]);

        $test = Test::find($id);

        $test->name = $validatedData["name"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];
        $test->course_id = $validatedData["course_id"];

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
