<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
     public function manage_users()
    {
        return view('admin.manage_users');
    }

    public function clients()
    {
        return view('admin.manage_clients');
    }

    public function reports()
    {
        return view('admin.view_reports');
    }
}
