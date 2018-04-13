<?php


use App\Task;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});



// task table all routes starts from here --->
Route::get('/', function () {
    return view('tasks');
});

Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});

// task table all routes ends here --->


// Route::get('/home', function (){
//     return view('login');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login', 'HomeController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
