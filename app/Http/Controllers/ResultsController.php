<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Evaluation;
use Laravel\User;
use Laravel\Profile;
use Laravel\Country;
use Laravel\Competition;
use Laravel\Competitions_participant;



class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::all();
         return view('results.index' , compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$results = Competitions_participant::with('participant',  'competition')->whereNotNull('result')->get();
        $results = Competitions_participant::with('participant',  'competition')->where('competition_id', $id)->whereNotNull('result')->orderBy('result', 'DESC')->get();
        $country = Profile::with('country')->get();
        return view('results.show', compact('results', 'participant', 'competition', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
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
        $result = Competitions_participant::where('participant_id', $id )->where('competition_id', $request->competition_id)->first();
        $result->result = $request->result;
        $result->save();

        return view('results.update');
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
