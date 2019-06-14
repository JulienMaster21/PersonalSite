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

Route::get("/contact", "PageController@getContact")
        ->name("contact");

Route::get('/userpage', 'PageController@getUserPage')
        ->name('userPage');

Route::get("/500", 'PageController@get500')
        ->name('500');

Route::get("/403", 'PageController@get403')
        ->name('403');

Route::get("/419", 'PageController@get419')
        ->name('419');

Route::resource("assignments", "AssignmentController");
Route::resource("tests", "TestController");
Route::resource("courses", "CourseController");
Route::resource("bloks", "BlokController");

Auth::routes();
