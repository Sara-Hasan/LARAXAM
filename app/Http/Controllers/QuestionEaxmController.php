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
        // $answer = Answer::all();
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
        $request->validate([
            'question' => 'required',
            'user_id' => 'required',
            'given_answer' => 'required',
            'true_answer' => 'required'
        ]);
        $question = new Answer([
            'question' => $request->question,
            'user_id' => $request->user_id,
            'given_answer' => $request->given_answer,
            'true_answer' => $request->true_answer
            ]);
        $question->save();
        return redirect()->route('questionexam.create')
        ->with('success','question has been created successfully.');
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
    public function destroy($id)
    {
        //
    }
}
