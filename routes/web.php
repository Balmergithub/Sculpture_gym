<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {  //returns the string "welcome" to the web page
//     return view('welcome');
// });

// });
// Route::get('/users/{id}/{name}', function ($id, $name) {  //**** returns the inputed VALUES on the url box to the web page
//     return 'This is user '.$name.' with the id of '.$id;
// });

Route::get('/','App\Http\Controllers\PagesController@index');

Route::get('/about', function () {     //**** returns the file in the view/pages/about file
    return view('pages.about');
});
     