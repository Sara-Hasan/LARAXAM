@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="dashboard">
    <div class="page-header">
       <div class="container">
          <div class="page-header-text">
             <div class="dashboard-header d-flex">
                <div class="d-flex align-items-center flex-column ">
                   <div id="profileImg" class="dashboard-center ">
                      <img class="dashboard-img" src="{{ 'storage/'. Auth::user()->image }}" alt="" id="profile">
                    </div> 
                   <div class="welcome">
                      <div class="dashboard-title">Hi <span id="username">{{ Auth::user()->name }}</span> !</div>
                      <div class="dashboard-des">Welcome back</div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container ">
       <div class="quizes-title">
          <div class="quize-bold">Quizes</div>
          <div class="quize-des">Test your knowledge</div>
       </div>
       <div class="row quizes-padding ">
          @foreach ($exams as $item)
               {{-- test --}}
         <div class="col-lg-4 col-md-6 col-sm-6 ">
            <div class="quizes-card">
               <div class="box_grid">
                  <img src="{{  $item->image_exam }}" alt="">
                  <div class="quiz-card">
                     <div class="card-title">
                       {{  $item->name }}
                     </div>
                     <ul>
                        <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                              class="dm-none">Question</p></li>
                        <li> <i class="far fa-history"></i><p class="mx-1">{{ $item->time }}</p><p
                              class="dm-none">Minute</p></li>
                        <li><a href="{{ route('questionexam.create' , $item->id) }}" id="quizStart1" class="btn primaryBtn start-btn ">Start</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 ">
               <div class="box_grid">
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 ">
               <div class="box_grid">
               </div>
            </div>
         </div>
          @endforeach
   
          {{-- start card --}}
          <div class="col-lg-4 col-md-6 col-sm-6 ">
             <div class="quizes-card">
                <div class="box_grid">
                   <img src="img/solar.jpg" alt="">
                   <div class="quiz-card">
                      <div class="card-title">
                         solar system
                      </div>
                      <ul>
                         <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                               class="dm-none">Question</p></li>
                         <li> <i class="far fa-history"></i><p class="mx-1">01.25</p><p
                               class="dm-none">Minute</p></li>
                         <li><a href="quiz.html" id="quizStart1" class="btn primaryBtn start-btn ">Start</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
          </div>
          {{-- End card --}}
          <div class="col-lg-4 col-md-6 col-sm-6 ">
             <div class="quizes-card">
                <div class="box_grid">
                   <img src="img/front-end.jpg" alt="">
                   <div class="quiz-card">
                      <div class="card-title">
                         front-end
                      </div>
                      <ul>
                         <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                               class="dm-none">Question</p></li>
                         <li> <i class="far fa-history"></i><p class="mx-1">01.25</p><p
                               class="dm-none">Minute</p></li>
                         <li><a href="quiz.html" id="quizStart2" class="btn primaryBtn start-btn">Start</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ">
             <div class="quizes-card">
                <div class="box_grid">
                   <img src="img/geography.jpg" alt="">
                   <div class="quiz-card">
                      <div class="card-title">
                         geography
                      </div>
                      <ul>
                         <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                               class="dm-none">Question</p></li>
                         <li> <i class="far fa-history"></i><p class="mx-1">01.25</p><p
                               class="dm-none">Minute</p></li>
                         <li><a href="quiz.html" id="quizStart3" class="btn primaryBtn start-btn">Start</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ">
             <div class="quizes-card">
                <div class="box_grid">
                   <img src="img/body.jpg" alt="">
                   <div class="quiz-card">
                      <div class="card-title">
                         human body
                      </div>
                      <ul>
                         <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                               class="dm-none">Question</p></li>
                         <li> <i class="far fa-history"></i><p class="mx-1">01.25</p><p
                               class="dm-none">Minute</p></li>
                         <li><a href="quiz.html" id="quizStart4" class="btn primaryBtn start-btn">Start</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ">
             <div class="quizes-card">
                <div class="box_grid">
                   <img src="img/IT.png" alt="">
                   <div class="quiz-card">
                      <div class="card-title">
                         information technology
                      </div>
                      <ul>
                         <li> <i class="far fa-book-open"></i><p class="mx-1">5</p><p
                               class="dm-none">Question</p></li>
                         <li> <i class="far fa-history"></i><p class="mx-1">01.25</p><p
                               class="dm-none">Minute</p></li>
                         <li><a href="quiz.html" id="quizStart5" class="btn primaryBtn start-btn">Start</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="box_grid">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
