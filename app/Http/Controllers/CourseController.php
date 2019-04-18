<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Blok;
use App\Test;

class CourseController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloks = Blok::all();

        return view("pages/courses.create", ["bloks" => $bloks]);
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
                "blok_id" => "nullable",
            ]
        );

        $course = new Course;

        $course->name = $validatedData["name"];
        $course->blok_id = $validatedData["blok_id"];

        $course->save();

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
        $course = Course::find($id);
        $tests = Test::all();
        $blok = $course->blok;

        return view("pages/courses.show", [
            "course" => $course,
            "tests" => $tests,
            "blok" => $blok,
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
        $course = Course::find($id);
        $bloks = Blok::all();

        return view("pages/courses.edit", [
            "course" => $course,
            "bloks" => $bloks,
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
            "blok_id" => "nullable",
        ]);

        $course = Course::find($id);

        $course->name = $validatedData["name"];
        $course->blok_id = $validatedData["blok_id"];

        $course->save();

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
        Course::find($id)->delete();

        return redirect("tests");
    }
}
