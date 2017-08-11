<?php

namespace App\Http\Controllers;


use App\Model\Payment;
// use App\Http\Controllers\Controller;
/**
* 
*/
class PaymentController extends Controller
{
	
	public function construct()
	{

	}

	public function PaymentQueries(){	
        /*
        To insert data into the table
        */
		$payment = Payment  :: create([
        'client_Id' => '2',
        'start_date' => 'test description',
        'end_date' => '1',
        'hours' =>'5',
        'weekly_hour_Ids' => '5',
        'in_dollar' => '$25',
        'in_rupees' => '2500',
        'paid_date' => '2017-08-11',
        'paid_to' => '1'

        ]);
	}
}





?>