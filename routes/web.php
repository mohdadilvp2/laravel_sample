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

Route::get ('weekly', 'WeeklyHourController@WeeklyHourQueries');

Route::get ('payment', 'PaymentController@PaymentQueries');

Route::get ('UserQueries', 'UserController@UserQueries');

Route::get ('testClient', 'ClientController@testclientQueries');

Route::get ('ExpenseTest', 'ExpenseController@ExpenseQueries');

Route::get ('login', 'LoginController@login');

Route::post ('login', 'LoginController@store');



