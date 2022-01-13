<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuestionEaxmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx($id)
    { 
        $exam = Exam::where('id','=',$id)->first();
        $question =$exam->question()->get();
        // dd($numQuestion);
        return view('questionexam', compact('question'));
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
    public function stores(Request $request, $id)
    {
        $score = 0;
        $counter = 0;
        $answers   = array_values($request->all());
        // dd($answers);
        // $id = $request->exam_id;
        // $question = Question::all();
        $exam = Exam::findOrFail($id);
        $questions = $exam->question;
        // dd($questions);
        foreach($questions as $items){
            $counter++; 
            if($items->correct == $answers[$counter]){
                        $score += 1;       
            }    
        }
        // dd($counter);given_answer0
        // dd($answers[$counter]); 
        // dd($request->question); 
        // $request->validate([
        //     'user_id' => 'required',
        //     'score' => 'required'
        // ]);
        // dd($score);
        $profile = new Profile([
            'user_id' => Auth::user()->id,
            'score' => $score
        ]);
        $profile->save();
        // return 'dffdf';
        // return redirect('result')
        // ->with('success','answer has been created successfully.');
        return view('result', compact('profile'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($exam_id)
    {
        $question = Question::where('exam_id',$exam_id)->orderBy('exam_id')->get();
        // dd($question);
        return view('questionexam', compact('question'));
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
