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
// Route::get('testclientQueries', function () {
//     return view('testclientQueries');
// });

Route::get ('usercode', 'UserController@usercode');





Route::get ('pass', 'PasswordResetController@PasswordQueries');

Route::get ('payment', 'PaymentController@PaymentQueries');










Route::get ('user', 'UserController@UserQueries');

Route::get ('testClient', 'ClientController@testclientQueries');

Route::get ('ExpenseTest', 'ExpenseController@ExpenseQueries');

/*

*/
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

   Route::get('/home', 'HomeController@index');
 
   Route::get('/dashboard', 'HomeController@dash');

   Route::get('weekly-hours', 'WeeklyHourController@showAll')->name('weekly-hours-listings');

   Route::get('weekly-hours/create', 'WeeklyHourController@create')->name('weekly-hours-create');

   Route::post('weekly-hours/store', 'WeeklyHourController@store')->name('weekly-hours-store');

   Route::get('weekly-hours/edit/{id}', 'WeeklyHourController@edit')->name('weekly-hours-edit');

    Route::post('weekly-hours/update', 'WeeklyHourController@update')->name('weekly-hours-update');

});
