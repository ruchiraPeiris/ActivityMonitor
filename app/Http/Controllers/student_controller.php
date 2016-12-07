<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class student_controller extends Controller{
    public function getRegister(){
        return view('register');
    }

    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'index' => 'required',
            'password' => 'required'
        ]);

        if(!Auth::attempt(['id' => $request['index'], 'password' => $request['password']])){
            return redirect()->route('login')->with('fail', 'Login Failed!');
        }

        $student = student::where('id', $request['index'])->first();

        return redirect()->route('dashboard');
    }

   public function getDashboard(){
       return view('dashboard');
   }

   public function getLogout(){
       Auth::logout();
       return redirect()->route('login');
   }


    public function register(Request $request){
        $this->validate($request, [
            'index' => 'required',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $student = new student();
        $student->first_name = ucfirst($request['firstname']);
        $student->last_name = ucfirst($request['lastname']);
        $student->email = $request['email'];
        $student->id = $request['index'];
        $student->password = bcrypt($request['password']);
        $student->save();

        return redirect()->route('register')->with('success', 'true');

    }


}
