<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup_user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $main_validator = DB::table('users')
        ->where('full_name', $request->full_name)
        ->where('email_address', $request->email_address)
        ->get();

        $name_validator = DB::table('users')
        ->where('full_name', $request->full_name)
        ->get();

        $email_validator = DB::table('users')
        ->where('email_address', $request->email_address)
        ->get();

        if(count($main_validator) > 0){

            return response()->json([
                'status' => 'failed',
                'data' => 'full name and email already exist'
            ],201);
            
        }else if(count($name_validator) > 0){

            return response()->json([
                'status' => 'failed',
                'data' => 'full name already exist'
            ],202);

        }else if(count($email_validator) > 0){

            return response()->json([
                'status' => 'failed',
                'data' => 'email already exist'
            ],203);

        }else{

            $response = User::create($data);
            return response()->json([
                'status' => 'success',
                'data' => $response
            ],200);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
