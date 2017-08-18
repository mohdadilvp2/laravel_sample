<?php

namespace App\Http\Controllers;


use App\Model\WeeklyHour;
use Illuminate\Http\Request;
use App\Model\Client;
// use App\Http\Controllers\Controller;

class WeeklyHourController extends Controller
{
	
	public function construct()
	{

	}

	// public function WeeklyHourQueries(){

	// 	/*
 //        To insert data into the table
 //        */

	//      $week = WeeklyHour  :: create([
 //        'client_id' => '2',
 //        'start_date' => '2017-08-10',
 //        'end_date' => '2017-08-11',
 //        'hours' =>'5',
 //        'missing_hour' => '5',
 //        'hourly_rate' => '2500',
 //        'total' => '25000',
 //        ]);
	// }

/* 
function for weekly_hour page view
*/
        /*
         * Function which Lists All Weeksly Hours //TODO Pagination needed
         * @param
         * @return View
         */
         public function showAll(){

            $week = WeeklyHour :: with('Client') -> get();
            return view('weeklyHour.listings',['weeks' =>$week]);  
          
         }

        /*
         * Function to Show Details of a specifc Weekly Hour
         * @param Weekly_hour_id
         * @return View
         */
        public function show($id) {


         }

         /*
         * Function to show add new weekly hour form
         * @param 
         * @return View
         */
         public function create() {

             $client = Client :: get();
             return view('weeklyHour.create', ['clients' => $client ]);

         }

         /*
         * Function to used to store new weekly hours entry
         * @param Request
         * @return View
         */
        public function store(Request $request){
         
         $clientid = $request->clientid;
         $sdate = $request->sdate;
         $edate = $request->edate;
         $hour = $request->hour;
         $mhour = $request->mhour;
         $hrate = $request->hrate;
         $total = $request->total;

         $weekly = WeeklyHour :: create([
        'client_id' => $clientid,
        'start_date' => $sdate,
        'end_date' => $edate,
        'hours' => $hour,
        'missing_hour' => $mhour,
        'hourly_rate' => $hrate,
        'total' => $total
        ]);

        }

         /*
         * Function to used to display Edit weekly Hour Form
         * @param weekly hour Id
         * @return View
         */
        public function edit($id){
            return View::make('weeklyHour.edit');
echo $id;die();
        }

         /*
         * Function to used to update existing row in weekly hour table
         * @param Request
         * @return View
         */
        public function update(){
           

        }
}





?>