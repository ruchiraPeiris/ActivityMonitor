<?php

namespace App\Http\Controllers;

use App\Activity;
use App\category;
use App\instructor;
use App\module;
use App\takes_part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class admin_controller extends Controller{
   public function getDashboard(){
       $categories = category::all();
       $modules = module::where('cat_id', '1')->get();

       $finalActivities = array();

       $pendingActivities = takes_part::where('status', 'pending')->get();

       foreach ($pendingActivities as $pendingActivity){
           $temp = array();
           array_push($temp, $pendingActivity->student_id);
           $activity = Activity::where('id', $pendingActivity->activity_id)->first();
           array_push($temp, $activity->name);
           array_push($temp, $activity->updated_at);

           $instructor = instructor::where('module_id', $activity->module_id)->first();
           array_push($temp, ($instructor->firstname).' '.$instructor->lastname);
           array_push($finalActivities, $temp);
       }

       return view('adminDashboard', ['categories' => $categories, 'modules' => $modules, 'pendingActivityData' => $finalActivities]);
    }

    public function addInstructor(Request $request){

       $this->validate($request, [
           'firstname' => 'required|alpha',
           'lastname' => 'required|alpha',
           'email' => 'email|required',
       ]);

       $instructor = new instructor();
       $instructor->firstname = ucfirst($request['firstname']);
       $instructor->lastname = ucfirst($request['lastname']);
       $instructor->email = $request['email'];
       $instructor->category_id = Input::get('catSelect');
       $instructor->module_id = Input::get('module');
       $instructor->save();

       return redirect()->route('adminDashboard')->with('success', 'true');
    }



}
