<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use App\User;
use App\Profile;
use App\Competitions_arbiter;
use App\Competitions_participant;
use Carbon\Carbon;





class CompetitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $competitions = Competition::all();
        return view('competitions.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arbiter = new Competitions_arbiter;

        $arbiter->arbiter_id = $request->arbiter_id;
        $arbiter->competition_id = $request->competition_id;

        $arbiter->save();

        

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competition_id = Competition::find($id);

        $role_arbiter = 2;
        $role_participant = 3;

        $arbiters = User::with('profile')->where('role_id', $role_arbiter)->get();
        $participants = User::with('profile')->where('role_id', $role_participant)->get();
        

        $participants_chosen = Competitions_participant::with('participant', 'competition')->where('competition_id', $competition_id->id ) ->whereNull('date_withdrawn')->get();
        return view('competitions.show', compact('arbiters', 'competition_id'), compact('participants', 'participants_chosen'));
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
        $current = Carbon::now();
        $result = Competitions_participant::find($id);
        $result->result = 0;
        $result->date_withdrawn = $current;
        $result->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
