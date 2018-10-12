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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/single-responsibility', function () {
    $report = new App\Lessons\SingleResponsibility\Reporting\SalesReporter(new App\Lessons\SingleResponsibility\Repositories\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end = Carbon\Carbon::now();

    return $report->between($begin, $end, new App\Lessons\SingleResponsibility\Reporting\HtmlOutput);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
