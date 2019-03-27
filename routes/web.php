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

Route::get("/", "PageController@getHome")
        ->name("home");

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

Route::resource("assignments", "AssignmentController")->names([
    "index" => "assignments.index",
    "create" => "assignments.create",
    "store" => "assignments.store",
    "show" => "assignments.show",
    "edit" => "assignments.edit",
    "update" => "assignments.update",
    "destroy" => "assignments.destroy",
]);
