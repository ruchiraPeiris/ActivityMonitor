<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class student_controller extends Controller{
    public function getRegister(){
        return view('register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'index' => 'required',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }


}
