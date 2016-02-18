<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cem_registry;

class EnrolmentController extends Controller
{
    //

    public function elig (Request $request)
{
    //$search = \Request::post('search'); //<-- we use global request to get the param of URI
 $q1 = $request->input('q1');
  $q2 = $request->input('q2');
   $q3 = $request->input('q3');
    $q4 = $request->input('q4');
     $q5 = $request->input('q5');
      $q6 = $request->input('q6');
       $q7 = $request->input('q7');


 if ($q1=="yes" && $q2=="yes" && $q3=="yes" && $q4=="yes" && $q5=="no" && $q6=="no" && $q7=="no"  ){
        	
       	return

       	 redirect('/hrio_manage_clients')->with('info', 'Client is Eligible');
       }
       elseif ($q1=="yes" && $q2=="yes" && $q3=="na" && $q4=="yes" && $q5=="no" && $q6=="no" && $q7=="no"  ){
        	
       	return

       	 redirect('/hrio_manage_clients')->with('info', 'Client is Eligible');
       }
       elseif ($q1=="yes" && $q2=="yes" && $q3=="na" && $q4=="na" && $q5=="no" && $q6=="no" && $q7=="no"  ){
        	
       	return

       	 redirect('/hrio_manage_clients')->with('info', 'Client is Eligible');
       }
       elseif ($q1=="yes" && $q2=="yes" && $q3=="yes" && $q4=="na" && $q5=="no" && $q6=="no" && $q7=="no"  ){
        	
       	return

       	 redirect('/hrio_manage_clients');
       }

       elseif($q6=="yes"){

     	
       	return

       	 redirect('/hrio_reports')->with('info', 'Prisoner: Client is NOT Eligible');
       }
       elseif($q7=="yes" ){

     	
       	return

       	 redirect('/hrio_reports')->with('info', 'Severe Mental illness: Client is NOT Eligible');
       }
        elseif($q5=="yes" | $q6=="yes" | $q7=="yes"){

     	
       	return

       	 redirect('/hrio_reports')->with('info', 'Client is NOT Eligible');
       }

  else  {
	      return redirect('/hrio_reports')->with('info', 'Client is NOT Eligible');

       }   

}


   public function enrol ()
{


 $rules = array(


            'en1' => 'required',
             'en2' => 'required',
              'en3' => 'required',
               'en4' => 'required',
                'en5' => 'required',
                 'en6' => 'required',
                  'en7' => 'required',
                   'en8' => 'required',
                    'en9' => 'required'

            
        );
   $validator = Validator::make(Input::all(), $rules);
   if ($validator->fails()) {
            return Redirect::to('/hrio_manage_clients');
        }
         else {
            // store
           $cems = new Cem_registry;
            // $cems->name       = Input::get('en1');
            //  $cems->name       = Input::get('en2');
              $cems->gender             = Input::get('en3');
               $cems->dob                = Input::get('en4');
                $cems->patient_no         = Input::get('en5');
                 $cems->cem_screening      = Input::get('en6');
                  $cems->cem_outcome        = Input::get('en7');
                   $cems->cem_id             = Input::get('en8');
                    $cems->reason_nonenroll   = Input::get('en9');
                     $cems->save();

            // redirect
            
            return redirect('/hrio_manage_clients');
        }
 // 'id','gender','dob','patient_no','cem_screening', 'cem_outcome', 'enrolled','cem_id', 'reason_nonenroll','cem_endpoint', 'cem_enddate','fac_id',
 //    ];


}

}


