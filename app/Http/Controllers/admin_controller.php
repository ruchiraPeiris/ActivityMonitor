<?php

namespace App\Http\Controllers;

use App\category;
use App\module;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class admin_controller extends Controller{
   public function getDashboard(){
       $categories = category::all();
       $modules = module::where('cat_id', '1')->get();
       return view('adminDashboard', ['categories' => $categories, 'modules' => $modules]);
    }



}
