<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourse;
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
        $this->authorizeResource(Course::class, "course");
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

        return view("pages/courses.create", [
            "bloks" => $bloks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreCourse $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourse $request)
    {
        Course::create($request->validated());

        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $courses = Course::all();
        $tests = Test::all();
        $blok = $course->blok;

        return view("pages/courses.show", [
            "courses" => $courses,
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
    public function edit(Course $course)
    {
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
    public function update(StoreCourse $request, Course $course)
    {
        $course->update($request->validated());

        return redirect("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        // Remove the associations with tests
        Test::where('course_id', $course->id)->update(['course_id' => NULL]);

        $course->delete();

        return redirect("dashboard");
    }
}
