<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Client;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{


public function construct() {

}


public function testclientQueries() {


/////////////////////////////////////normal insertion///////////////////////////////////////////

        // $client = new Client;

        // $client->name = 'john';
        // $client->description = 'hai';
        // $client->weekly_hour = '5';
        // $client->hourly_rate = '2';
        // $client->skype = 'test_skype_id';
        // $client->email = 'test@gmail.com';

        // $client->save();

////////////////////////mass assignment insertion///////////////////////////////////////////////

     $Client = Client  :: create([
        'name' => 'test name',
        'description' => 'test description 2',
        'weekly_hour' => '10',
        'hourly_rate' =>'10',
        'skype' => 'test_test',
        'email' => 'tst@gmail.com'
                        

        ]);

///////////////////////////////////////selection fron DB//////////////////////////////////////

    
               
// $clients = Client :: get();


// print_r($clients);exit;

//////////////////////////////////////////////////update DB///////////////////////////////////

//Client::where('name', 'test name')
          // ->where('destination', 'San Diego')
          // ->update(['name' => 'august']);

///////////////////////////////////////////////delete from table/////////////////////////////

     

     // Client::where('client_id',3)->
     // delete();
   

}

}