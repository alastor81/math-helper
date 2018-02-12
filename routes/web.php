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


// power calculating

Route::get('/', "MathController@index")->name('home');


Route::get('/power-show',"MathController@power")
    ->name('power-show');

Route::get('/power',function ()
{
    return view('pow');
})
    ->name('power');




// root calculating

Route::get('/ridge-show','MathController@ridge')
    ->name('ridge-show');


Route::get('/ridge',function ()
{
return view('ridge');
})
    ->name('ridge');





// factorial calculating

Route::get('/factorial-show','MathController@factorial')
    ->name('factorial-show');


Route::get('/factorial',function ()
{
    return view('factorial');
})
    ->name('factorial');






// subsets calculating

Route::get('/subsets-show','MathController@subsets')
    ->name('subsets-show');


Route::get('/subsets',function ()
{
    return view('subsets');
})
    ->name('subsets');


// deductible calculating

Route::get('/deductible-show','MathController@deductible')
    ->name('deductible-show');


Route::get('/deductible',function ()
{
    return view('deductible');
})
    ->name('deductible');




// factorial calculating

Route::get('/invert-show','MathController@invert')
    ->name('invert-show');


Route::get('/invert',function ()
{
    return view('invert');
})
    ->name('invert');