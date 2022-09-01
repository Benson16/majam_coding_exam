<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index (Request $request){


        $fullname = DB::table('users')
        ->where('email_address',$request->email)
        ->where('confirmed_password',$request->password)
        ->get();



        return view('home.index',compact('fullname'));

    }
}
