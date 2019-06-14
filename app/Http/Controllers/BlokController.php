<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlok;
use Illuminate\Http\Request;
use \App\Blok;
use \App\Course;

class BlokController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Blok::class, "blok");
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlok $request)
    {
        Blok::create($request->validated());

        return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blok $blok)
    {
        $bloks = Blok::all();
        $courses = Course::all();

        return view("pages/bloks.show", [
            "blok" => $blok,
            "bloks" => $bloks,
            "courses" => $courses,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blok $blok)
    {
        // Remove the associations with courses
        Course::where('blok_id', $blok->id)->update(['blok_id' => NULL]);

        $blok->delete();

        return redirect("dashboard");
    }
}
