@extends('layouts.app')
@section('content')
<section class="container">
  <?php $counter = 0; ?>
    <?php foreach ($question as $item) { ?> 
<form action="{{ route('quizz',$item->exam_id) }}" method="post" enctype="multipart/form-data">
    @csrf  
    <div class="form-group">
        <h2> {{$item->question}}</h2>
    </div>    
    <div class="form-group">        
    <label class="label">{{ $item->choice1 }}
        <input type="radio"  value="{{$item->choice1}}" name="given_answer{{$counter}}" required>
        <span class="check"></span>
      </label>
      <label class="label">{{ $item->choice2 }}
        <input type="radio" value="{{$item->choice2}}" name="given_answer{{$counter}}" required>
        <span class="check"></span>
      </label>
      <label class="label">{{ $item->choice3 }}
        <input type="radio" value="{{$item->choice3}}" name="given_answer{{$counter}}" required>
        <span class="check"></span>
      </label>
      <label class="label">{{ $item->choice4 }}
        <input type="radio" value="{{$item->choice4}}" name="given_answer{{$counter}}" required>
        <span class="check"></span>
      </label>
      <?php $counter++; ?>
    </div>
      <hr> 
      <?php } ?>
    <button type="submit" class="btn btn-success ml-3">Submit</button>
</form>

    </section>
     <!DOCTYPE html>
<html>
<style>
.label {
  display: block;
  position: relative; 
  padding-left: 40px; 
  margin-bottom: 20px;
  cursor: pointer; */
  font-size: 25px;
}

/* Hide the default radio button */
.label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
} 

/* custom radio button */
.check {
  position: absolute;
  top: 0;
  left: 0;
  height: 30px;
  width: 30px;
  background-color: lightgray;
  border-radius: 50%;
}

.label:hover input ~ .check {
  background-color: gray;
}

.label input:checked ~ .check {
  background-color: green;
}

.check:after {
  content: "";
  position: absolute;
  display: none;
}

.label input:checked ~ .check:after {
  display: block;
}

.label .check:after {
 	top: 8px;
	left: 8px;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background: white;
} */ 
</style>
<body>

</body>
</html>

 

@endsection