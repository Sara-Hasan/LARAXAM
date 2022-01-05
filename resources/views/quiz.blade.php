@extends('layouts.app')
@section('content')
<div class="info_box activeInfo">
    <div class="info-title"><p>Some Rules of this Quiz</p></div>
    <div class="info-list">
      <div class="info">
        1. You will have only <b style="color:#748a6d;">15 seconds</b> per each question.
      </div>
      <div class="info">
        2. Once you select your answer, it can't be undone.
      </div>
      <div class="info">
        3. You can't select any option once time goes off.
      </div>
      <div class="info">
        4. You can't exit from the Quiz while you're playing.
      </div>
      <div class="info">
        5. You'll get points on the basis of your correct answers.
      </div>
    </div>
    <div class="buttons">
      <a href="{{ route('home') }}">        <button class="btn borderBtn btn-width mt-1 me-1 quit">Exit Quiz</button></a>
      <a href="{{ route('questionexam.create') }}"><button class="btn primaryBtn btn-width mt-1 me-1 restart">Continue</button></a>
    </div>
  </div>



  {{-- <div class="quiz-container">

    <div class="page-header">
      <div class="container">
        <div class=" page-header-text category">Quize (<span class="questionsNum">5</span>):
          <span class="quiz-name"></span></div>
      </div>
    </div>
    <div class="container result">
      <div class="row inner-page">
        <div class="d-flex justify-content-between align-items-center">
          <div><span class="timer timer_sec me-2"></span> <span class="time_left_txt"> Time left</span></div>
          <div><a href="dashboard.html" class="btn primaryBtn">Start Over</a></div>
        </div>
        <div class="col-lg-12 ">
          <div class="time_line"></div>

        </div>
        <div class="question"></div>
        <div class="answers all-answers"></div>
        <div class="d-flex justify-content-between mt-4">
          <div class="bullets">
            <div class="spans"></div>
          </div>
          <button class="btn primaryBtn px-4 submit-btn">next</button>
        </div>
      </div>
    </div>
  </div>

  <div class="result_box ">
    <div>
      <img class="result_img" src="" alt="">
    </div>
    <div class="complete_text">You've completed the Quiz!</div>
    <div class="score_text">
      <!-- Here I've inserted Score Result from JavaScript -->
    </div>
    <div class="buttons">
      <button class="btn borderBtn btn-width mt-1 me-1 Show_Answer">Show Answer</button>
      <button class="btn primaryBtn btn-width mt-1 me-1 quit"><a class="white" href="dashboard.html">Quit</a></button>
    </div>
  </div> --}}
@endsection