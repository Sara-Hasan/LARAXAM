<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Exam;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        $exam = Exam::all();
        return view('admin.question', compact('question','exam'));
        // return view('admin.editQue', compact('question','exam'));
        // ['id', 'name']
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
        // return view('admin.editQue.create');

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
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'correct' => 'required',
            'exam_id' => 'required'
        ]);
        $question = new Question([
            'question' => $request->question,
            'choice1' => $request->choice1,
            'choice2' => $request->choice2,
            'choice3' => $request->choice3,
            'choice4' => $request->choice4,
            'correct' => $request->correct,
            'exam_id' => $request->exam_id
            ]);
        $question->save();
        return redirect()->route('question.index')
        ->with('success','question has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('admin.question', compact('question'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $exam = Exam::all();
        return view('admin.editQue',compact('question','exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question' => 'required',
            'choice1' => 'required',
            'choice2' => 'required',
            'choice3' => 'required',
            'choice4' => 'required',
            'correct' => 'required',
            'exam_id' => 'required'
        ]);
        $question->question = $request->question;
        $question->choice1 = $request->choice1;
        $question->choice2 = $request->choice2;
        $question->choice3 = $request->choice3;
        $question->choice4 = $request->choice4;
        $question->correct = $request->correct;
        $question->exam_id = $request->exam_id;
        $question->save();
        return redirect()->route('question.index')
        ->with('success','question has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('question.index')
        ->with('success','question has been deleted successfully.');
    }
}
