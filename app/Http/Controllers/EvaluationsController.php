<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
use App\User;
use App\Profile;
use App\Country;
use App\Competition;
use Carbon\Carbon;
use App\Competitions_participant;







class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $evaluations = Evaluation::all();

        $evaluations = Evaluation::with('participant',  'arbiter', 'competition')->whereNull('date_anulated')->get();
        // $participants = User::with('profile')->get();
         $competitions = Competition::all();
         $country = Profile::with('country')->get();

        return view('evaluations.index', compact('evaluations', 'participants', 'competitions', 'country') );
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
        
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id )
    {
      //var_dump($request->competition_id);
       //$evaluations = Evaluation::with('participant',  'arbiter', 'competition')->where('participant_id', )->get();

     $evaluations = Evaluation::with('participant',  'arbiter', 'competition')->where('participant_id', $id )->where('competition_id', $request->competition_id)->whereNull('date_anulated')->get();

      return view('evaluations.show', compact('evaluations'));
      //where('competition_id', $request->competition_id )
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function edit($id)
    {
        return 'edit';
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    { 
        
        $evaluation = Evaluation::find($id);
        $current = Carbon::now();
        $evaluation->date_anulated = $current;
        $evaluation->save();
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
