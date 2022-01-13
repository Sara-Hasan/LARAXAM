@extends('layouts.app')
@section('content')
<div class="container">
    <div class="result">
        <div>
        {{-- <img class="result_img" src="{{ asset('./img/bad.jpg') }}" alt="" width='100px' height="200"> --}}
        </div>
        {{-- <div class="complete_text">You've completed the Quiz!</div> --}}
        <table id="customers">
            <tr>
              <th>score</th>
              <th>exam id</th>
              {{-- <th>Country</th> --}}
            </tr>
            @foreach ($profile as $item)
            <tr>
              <td><div class="score_text" style="color: red;">Hard luck {{ $item->score }}/ 5</div></td>
              <td> </td>
              {{-- <td>Germany</td> --}}
            </tr>
            @endforeach
        </table>
        {{-- <div class="score_text" style="color: red;">Hard luck {{ $item->score }}/5</div> --}}
        <div class="buttons">
            {{-- <button class="btn borderBtn btn-width mt-1 me-1 Show_Answer"><a class="white" href="{{ route('home') }}">Show Answer</a></button> --}}
            <button class="btn primaryBtn btn-width mt-1 me-1 quit"><a class="white" href="{{ route('home') }}">Quit</a></button>
        </div>
    </div>
</div>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
@endsection