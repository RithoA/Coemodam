<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HrioController extends Controller
{
    //

     public function hrio()
    {
        return view('hrio.hrio');
    }
   public function hrio_manage_clients()
    {
        return view('hrio.manage_clients');
    }
    
    public function hrio_reports()
    {
        return view('hrio.reports');
    }
     public function eligibility()
    {
        return view('hrio.reports');
    }

}
