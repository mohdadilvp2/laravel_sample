<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Http\Controllers\Controller;
/**
* 
*/
class UserController extends Controller
{
	
	public function construct()
	{

	}

	public function UserQueries(){
		// $expense = new Expense;

		// $expense->paid_to='aaa';
		// $expense->reason='dsdad';
		// $expense->paid_by='2';
		// $expense->date='2017-05-08';
		// $expense->description='hjh';

		// $expense->save();
		
		/*
        To insert data into the table
        */

		$user = User  :: create([
        'name' => 'aaaa',
        'email' => 'test description',
        'password' => 'test',
        'image' =>'img0001.jpg',
        'remember_token' => '2'

        ]);
	}

public function usercode(){

	$s = User :: find(1) -> expense;
	print_r($s);exit;
}
}





?>