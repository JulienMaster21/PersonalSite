<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTest;
use App\Role;
use Illuminate\Http\Request;
use App\Test;
use App\Blok;
use App\Course;
use App\User;

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
        $this->authorizeResource(Test::class, "test");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Role $role)
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
            'user' => $user,
            'role' => $role,
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

        return view("pages/tests.create", [
            "courses" => $courses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTest $request)
    {
        Test::create($request->validated());

        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {

        $tests = Test::all();
        $course = $test->course;

        return view("pages/tests.show", [
            "tests" => $tests,
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
    public function edit(Test $test)
    {
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
    public function update(StoreTest $request, Test $test)
    {
        $test->update($request->validated());
        if (!$request->has("completed")) {
            $test->completed = 0;
        }

        $test->save();

        return redirect("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();

        return redirect("dashboard");
    }
}
