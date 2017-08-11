<?php

namespace App\Http\Controllers;


use App\Model\WeeklyHour;
// use App\Http\Controllers\Controller;
/**
* 
*/
class WeeklyHourController extends Controller
{
	
	public function construct()
	{

	}

	public function WeeklyHourQueries(){

		/*
        To insert data into the table
        */

	     $week = WeeklyHour  :: create([
        'client_id' => '2',
        'start_date' => '2017-08-10',
        'end_date' => '2017-08-11',
        'hours' =>'5',
        'missing_hour' => '5',
        'hourly_rate' => '2500',
        'total' => '25000',
        ]);
	}
}





?>