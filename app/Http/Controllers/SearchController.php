<?php

namespace App\Http\Controllers;

use Request;
use App\Cem_registry;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    //


public function patients()
{
    //$search = \Request::post('search'); //<-- we use global request to get the param of URI

    $search =Request::get('search');
    $cems = Cem_registry::where('cem_id','=', $search)
        ->orderBy('cem_id')
        ->first();

       if (is_null($cems)){
        	
       	return redirect('/hrio_manage_clients')->with('info', 'Patient Not found');

        }
        else
        {
        	return redirect('/hrio_manage_clients')->with('info', 'Patient found');
        }



 	
    //return view('layouts.results',compact('users'));
}





}
