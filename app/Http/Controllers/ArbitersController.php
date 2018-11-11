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
         $this->validate($request, [
            'criterion_1' => 'required|numeric|min:0|max:10', 
            'criterion_2' => 'required|numeric|min:0|max:10', 
            'criterion_3' => 'required|numeric|min:0|max:10', 

            
        ], [
            'criterion_1.numeric' => 'The input must be an integer!',
            'criterion_2.numeric' => 'The input must be an integer!',
            'criterion_3.numeric' => 'The input must be an integer!',
            'criterion_1.min' => 'The input must be a number bethween 1 and 10!',
            'criterion_1.max' => 'The input must be a number bethween 1 and 10!',
            'criterion_2.min' => 'The input must be a number bethween 1 and 10!',
            'criterion_2.max' => 'The input must be a number bethween 1 and 10!',
            'criterion_3.min' => 'The input must be a number bethween 1 and 10!',
            'criterion_3.max' => 'The input must be a number bethween 1 and 10!',

        ]);

        $id = Auth::id();
        $evaluation = new Evaluation;

        $evaluation->competition_id = $request->competition_id;
        $evaluation->participant_id = $request->participant_id;
        $evaluation->arbiter_id = $id; 
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
