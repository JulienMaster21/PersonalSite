<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Assignment;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::get();
        return view("pages/assignments/index", ["assignments" => $assignments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages/assignments/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|unique:assignments|max:255",
            "url" => "required",
            "description" => "required|max:255",
        ]);

        $assignment = new Assignment;

        $assignment->name = $validatedData["name"];
        $assignment->url = $validatedData["url"];
        $assignment->description = $validatedData["description"];

        $assignment->save();

        return redirect("assignments");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
        return view("pages/assignments/show", ["assignment" => $assignment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::find($id);
        return view("pages/assignments/edit", ["assignment" => $assignment]);
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
            "name" => "required|unique:assignments,name," . $id . "|max:255",
            "url" => "required",
            "description" => "required|max:255",
        ]);

        $assignment = Assignment::find($id);

        $assignment->name = $validatedData["name"];
        $assignment->url = $validatedData["url"];
        $assignment->description = $validatedData["description"];

        $assignment->save();

        return redirect("assignments");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignment::find($id)
                    ->delete();

        return redirect("assignments");
    }
}
