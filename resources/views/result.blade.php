@extends('layouts.app')
@section('content')
<div class="container">
    <div class="result">
        <div>
        <img class="result_img" src="{{ asset('./img/bad.jpg') }}" alt="" style='width:'40%'; height:"30%";'>
        </div>
        {{-- <div class="complete_text">You've completed the Quiz!</div> --}}
        {{-- @foreach ($profile as $item) --}}
        <div class="score_text" style="color: red;">Hard luck {{ $profile->score }}/5</div>
        {{-- @endforeach --}}
        <div class="buttons">
            <button class="btn borderBtn btn-width mt-1 me-1 Show_Answer"><a href="{{ route('allresult') }}">Show Answer</a></button>
            <button class="btn primaryBtn btn-width mt-1 me-1 quit"><a class="white" href="{{ route('home') }}">Quit</a></button>
        </div>
    </div>
</div>
@endsection