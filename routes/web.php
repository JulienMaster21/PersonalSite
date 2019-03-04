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

Route::post("/update", "TestController@update")
        ->name("update");

Route::post("/delete", "TestController@delete")
        ->name("update");

Route::post("/create", "TestController@create")
        ->name("update");
