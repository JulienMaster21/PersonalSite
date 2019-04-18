<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Test;

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
        $tests = Test::with(['course', 'course.blok'])->paginate(10);

        return $tests;
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
                "course_id" => "nullable|integer"
            ]
        );

        $test = new Test;

        $test->name = $validatedData["name"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];
        $test->course_id = $validatedData["course_id"];
        $test->course()->associate(Course::find($validatedData['course_id']));

        $test->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::with(['course', 'course.blok'])->find($id);

        return $test;
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
        $validatedData = $request->validate(
            [
                "name" => "required|max:255|string",
                "completed" => "required|in:true,false|string",
                "grade" => "nullable|max:5",
                "EC" => "required|max:5",
                "course_id" => "nullable|integer"
            ]
        );

        $test->name = $validatedData["name"];
        $test->completed = $validatedData["completed"] == "true" ? true : false;
        $test->grade = $validatedData["grade"];
        $test->EC = $validatedData["EC"];
        $test->courses_id = $validatedData["course_id"];
        $test->course()->associate(Course::find($validatedData['course_id']));

        $test->save();
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
    }
}
