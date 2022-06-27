<?php

namespace App\Http\Controllers;
use App\Http\Controllers\StructureController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Message;




class DashboardController extends Controller
{
    public function index()
   { $users = User::all();
     $roles = Role::all();
     $messages = Message::all();
     

       if(Auth::user()->hasRole('secretaire')){
            return view('secretairedash',compact('messages'));
       }elseif(Auth::user()->hasRole('responsable')){
            return view('responsabledash');
       }elseif(Auth::user()->hasRole('admin')){
          return view('admindash',compact('users'), compact('roles'));  
   }
   }
  
}
