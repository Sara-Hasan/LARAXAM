<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Validation\Rules\Exists;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($exam_id)
    {
        
        return view('examquestion', compact('question'));        
    }
    public function create()
    {
        $exams = Exam::all();
        $question = Question::all();
        return view ('/home', compact('exams','question'));
    }
    public function category(Request $request,$exam_id)
    {
        // $question = Question::where('exam_id',$exam_id)->orderBy('exam_id')->paginate(1);
        // dd($question);
        // return view('examquestion', compact('question'));
    }
    public function show($exam_id)
    {
        return view('questionexam', compact('question'));
    }
}
