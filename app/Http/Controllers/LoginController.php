<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Form;

class LoginController extends Controller
{


     private $request;

	 public function __construct(Request $request)
    {
       $this->request =$request;
    }
    
    /*
       To show login page
       @param $request
       @return View
    */
    public function login() {
    return View::make ('login'); 
    }

    /*
      To show stored details
      @param $request
      @return $requested data
    */

     public function store() {
     	$name = $this->request->username;
     	$pass = $this->request->password;

       DB::insert('insert into users (username,password) values ( [$name, $pass]);
       
    }
}
