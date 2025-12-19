<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request){
        if($request->user()->is_admin==0){
            return view('dashboard');
        }
        else{
            return redirect()->route('admin.dashboard');
        }
    }
    public function index(Request $request){
        if($request->user()->is_admin==1){
            return view('Admin.dashboadAdmin');
        }
        else{
            return view('dashboard');
        }
    }
}
