<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class admin_controller extends Controller{
   public function getDashboard(){
       return view('adminDashboard');
    }



}
