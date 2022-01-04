<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = Exam::all();
        return view ('admin.exam', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam.create');
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
            'name' => 'required',
            'description' => 'required',
            'image_exam' => 'required|mimes:jpg,jpeg,png|max:5000',
            'time' => 'required',
        ]);
        if ($request->hasFile('image_exam')) {
            $file = $request->image_exam;
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move('storage', $filename);
            $exam = new Exam([
            'name' => $request->name,
            'description' => $request->description,
            'image_exam' => 'storage/' . $filename,
            'time' => $request->time
            ]);
        }
        $exam->save();
        return redirect()->route('exams.index')
        ->with('success','exam has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view ('admin.exam', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view ('admin.editexam', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_exam' => 'required|mimes:jpg,jpeg,png|max:5000',
            'time' => 'required',
        ]);
        
     if($request->image_exam != ''){        
          $path = public_path().'storage/';

          //code for remove old file
          if($exam->image_exam != ''  && $exam->image_exam != null){
               $file_old = $path.$exam->image_exam;
               unlink($file_old);
          }

          //upload new file
          $file = $request->image_exam;
          $filename = $file->getClientOriginalName();
          $file->move($path, $filename);
         
          $exam->name = $request->name;
          $exam->description = $request->description;
          $exam->image_exam = $request->image_exam;
          $exam->time = $request->time;

          //for update in table
          $exam->update(['file' => $filename]);
     }
     $exam->save();
        return redirect()->route('exams.index')
        ->with('success','exam has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index')
        ->with('success','exam has been deleted successfully');
    }
}
