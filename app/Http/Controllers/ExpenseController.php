<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Expense;
use App\Http\Controllers\Controller;
/**
* 
*/
class ExpenseController extends Controller
{
	
	public function construct()
	{

	}

	public function ExpenseQueries(){
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
		$expense = Expense  :: create([
        'paid_to' => 'aaaa',
        'reason' => 'test description',
        'paid_by' => '1',
        'date' =>'2017-05-08',
        'description' => 'test_test'

        ]);
	}
}





?>