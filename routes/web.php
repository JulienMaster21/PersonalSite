<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "PageController@getIndex")
        ->name("index");

Route::get("/over-mij", "PageController@getAbout")
        ->name("about");

Route::get("/dashboard", "TestController@index")
        ->name("dashboard");

Route::get("/beroepsbeeld", "PageController@getBeroepsbeeld")
        ->name("beroepsbeeld");

Route::get("/motivatie", "PageController@getMotivatie")
        ->name("motivatie");

Route::get("/emperor", "PageController@getEmperor")
        ->name("emperor");

Route::post("/updateTest", "TestController@update")
        ->name("updateTest");

Route::post("/deleteTest", "TestController@delete")
        ->name("deleteTest");

Route::post("/createTest", "TestController@create")
        ->name("createTest");

Route::resource("assignment", "AssignmentController")->names([
    "index" => "assignment.index",
    "create" => "assignment.create",
    "store" => "assignment.store",
    "show" => "assignment.show",
    "edit" => "assignment.edit",
    "update" => "assignment.update",
    "destroy" => "assignment.destroy",
]);
