<?php

namespace App\Http\Controllers;


use App\Model\PasswordReset;
// use App\Http\Controllers\Controller;
/**
* 
*/
class PasswordResetController extends Controller
{
	
	public function construct()
	{

	}

	public function PasswordQueries(){
		
	/*
       To insert data into the table
    */

	$pas = PasswordReset  :: create([
        'email' => 'test@gmail.com',
        'token' => '0002145214',
        ]);
	}
}

?>