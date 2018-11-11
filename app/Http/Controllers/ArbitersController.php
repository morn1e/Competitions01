<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Competition;
use Laravel\User;
use Laravel\Profile;
use Laravel\Competitions_arbiter;
use Laravel\Competitions_participant;
use Laravel\Evaluation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ArbitersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::all();
        return view('arbiters.index', compact('competitions'));
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

        $id = Auth::id();
        $evaluation = new Evaluation;

        $evaluation->competition_id = $request->competition_id;
        $evaluation->participant_id = $request->participant_id;
        $evaluation->arbiter_id = $id; //да се промени, когато включим middleware
        $evaluation->criterion_1 = $request->criterion_1;
        $evaluation->criterion_2 = $request->criterion_2;
        $evaluation->criterion_3 = $request->criterion_3;


        $evaluation->save();

       return redirect()->back()->with('message', 'You succesfully evaluated this participant! ' );
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
         $id = $competition_id->id;

        $role_participant = 3;
        $competitions_participant = Competitions_participant::with('participant')->where('competition_id', $id)->get();
        $participants = User::with('profile')->get();
        $country = Profile::with('country')->get();


        //$participants = Competitions_participant::with('user')->get();

        
        return view('arbiters.show', compact('competition_id', 'competitions_participant', 'id'), compact('participants', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
         return 'update';
        //$evaluation = Evaluation::find($id);

        // return view('evaluations.update', compact('evaluation'))
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
