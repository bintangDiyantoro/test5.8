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

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', 'Pages@about');
Route::get('/scholars', 'Scholars@index');
Route::resource('/students', 'Students');
Route::get('restore', 'Students@restore');
Route::get('deleted/{name}', function ($name) {
    return redirect('students')->with('status', 'Data of ' . str_replace('%dot%', '.', $name) . ' is deleted!');
});
Route::post('saveexcel', 'Students@excelsave');
Route::post('retrieveexcel', 'Students@retrieveexcel');
Route::post('upload', 'Students@upload');
Route::get('ses', function () {
    session(['hewan' => 'kambing']);
});
Route::get('res', function () {
    echo session()->get('hewan');
});
Route::get('del', function () {
    session()->flush();
});
Route::get('help/{a}/{b}', function ($a, $b) {
    echo jumlah($a, $b);
});
