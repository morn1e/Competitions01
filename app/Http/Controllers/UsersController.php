<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Country;
use App\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role_arbiter = 2;
        $role_participant = 3;

        $arbiters = User::with('profile')->where('role_id', $role_arbiter)->get();
        $participants = User::with('profile')->where('role_id', $role_participant)->get();
        // return $arbiters;
        // return $participants;

        return view('users.index', compact('arbiters', 'participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $roles = Role::all();
        return view('users.create', compact('countries', 'roles'));
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user = User::create([
                'username'          => $request['username'],                
                'email'         => $request['email'],
                'password'      => bcrypt($request['password']), 
                'role_id'           =>  $request['role_id'],               
            ]);

       $user_id = $user->id;
        
        $user_profile = Profile::create([
                // 'photo_path'    =>  $filename,
                'country_id'           =>  $request['country_id'],
                'name'           =>  $request['name'],
                'user_id'       =>  $user->id,
                                 
                
            ]);
  
        

        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $profile = Profile::where('user_id', '=', $user_id);
        $profile->delete();
        $user = User::find($user_id);        
        $user->delete();
        return  redirect()->back();
    }
}
