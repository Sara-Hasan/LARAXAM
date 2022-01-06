<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionEaxmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $user = User::all();
        return view('questionexam', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = Question::all();
        $answer = Answer::all();
        $profile = Profile::all();
        $user = User::all();
        $login_user =auth()->user()->id;
        // dd($login_user);
        return view('questionexam', compact('question','answer','profile','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $score = 0;
        $counter = 0;
        $question = Question::all();
        $profile = Profile::all();
        foreach($question as $items){
            // foreach($items->question as $items){
                if($items->question == $request->question){
                    if ($items->correct == $request->given_answer.$counter){
                        $score += 1;
                    }
                // }
                
            }
            $counter++;
                dd($request->given_answer.$counter);
        }
        // dd($request->given_answer0); 
        // dd($request->question); 
        $request->validate([
            'user_id' => 'required',
            'score' => 'required'
        ]);
        $profile = new Profile([
            'user_id' => auth()->user()->id,
            'score' => $score
        ]);
        $profile->save();
        return redirect()->route('questionexam.create')
        ->with('success','answer has been created successfully.');
    }
public function calculate()
{

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('questionexam', compact('question','answer','profile','user'));
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
    public function destroy($id)
    {
        //
    }
}
