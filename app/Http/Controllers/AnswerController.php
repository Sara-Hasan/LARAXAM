<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answer = Answer::all();
        $question = Question::all();
        $exam = Exam::all();
        return view('admin.answer',compact('answer','question','exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.answer.create');
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
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'correct' => 'required',
            'exam_id' => 'required',
            'q_id'    => 'required'
        ]);
        $answer = new Answer([
            'choice1' => $request->choice1,
            'choice2' => $request->choice2,
            'choice3' => $request->choice3,
            'choice4' => $request->choice4,
            'correct' => $request->correct,
            'exam_id' => $request->exam_id,
            'q_id'    => $request->q_id

            ]);
        $answer->save();
        return redirect()->route('answer.index')
        ->with('success','answer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('admin.answer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        $question = Question::all();
        $exam = Exam::all();
        return view('admin.editAns',compact('answer','question','exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'correct' => 'required',
            'exam_id' => 'required',
            'q_id'    => 'required',
        ]);      
        $answer->choice1 = $request->choice1;
        $answer->choice2 = $request->choice2;
        $answer->choice3 = $request->choice3;
        $answer->choice4 = $request->choice4;
        $answer->correct = $request->correct;
        $answer->exam_id = $request->exam_id;
        $answer->q_id    = $request->q_id;
        $answer->save();
        return redirect()->route('answer.index')
        ->with('success','answer has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect()->route('answer.index')
        ->with('success','answer has been deleted successfully.');
    }
}
