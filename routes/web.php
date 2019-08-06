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

Route::get('locale/{locale}', 'PageController@setLocale')
        ->name('setLocale');

Route::get("/", "PageController@getHome")
        ->name("home");

Route::get("/over-mij", "PageController@getAbout")
        ->name("about");

Route::get("/dashboard", "TestController@index")
        ->name("dashboard");

Route::get("/career-research", "PageController@getCareerResearch")
        ->name("careerResearch");

Route::get("/motivation", "PageController@getMotivation")
        ->name("motivation");

Route::get("/emperor", "PageController@getEmperor")
        ->name("emperor");

Route::get("/contact", "PageController@getContact")
        ->name("contact");

Route::get("/privacy-policy", "PageController@getPrivacyPolicy")
    ->name("privacyPolicy");

Route::get("/terms-and-conditions", "PageController@getTermsAndConditions")
    ->name("termsAndConditions");

Route::get('/userpage', 'CurrentUserController@getUserPage')
        ->name('userPage');

Route::post('/delete-current-user', 'CurrentUserController@deleteUser')
        ->name('deleteUser');

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
Route::resource("users", "UserController");
Route::resource("roles", "RoleController");

Auth::routes(['verify' => true]);
