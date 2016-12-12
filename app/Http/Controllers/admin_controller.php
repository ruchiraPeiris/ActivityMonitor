<?php

namespace App\Http\Controllers;

use App\category;
use App\instructor;
use App\module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class admin_controller extends Controller{
   public function getDashboard(){
       $categories = category::all();
       $modules = module::where('cat_id', '1')->get();
       return view('adminDashboard', ['categories' => $categories, 'modules' => $modules]);
    }

    public function addInstructor(Request $request){

       $this->validate($request, [
           'firstname' => 'required|alpha',
           'lastname' => 'required|alpha',
           'email' => 'email|required',
       ]);

       $instructor = new instructor();
       $instructor->firstname = $request['firstname'];
       $instructor->lastname = $request['lastname'];
       $instructor->email = $request['email'];
       $instructor->category_id = Input::get('catSelect');
       $instructor->module_id = Input::get('module');
       $instructor->save();

       return redirect()->route('adminDashboard')->with('success', 'true');
    }



}
