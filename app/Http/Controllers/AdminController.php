<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index(){

        $role=Auth::user()->role;

        if(auth()->user()->is_admin==1)
        {
            return view('admin.dashboard');
        }
        else return redirect('dashboard')->with('error', "you dont have access to admin");


    }
}
