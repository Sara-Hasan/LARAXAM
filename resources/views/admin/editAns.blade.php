@extends('admin.masteradmin')
@section('content')
{{-- edit --}}
<div class="col-xl-8 mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="card-header border-0">
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
      </div>
     @endif
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
       
        <div class="row" style='border-radius: 5px; background-color: #ffffff;  padding: 20px;'>
            <form action="{{ route('answer.update', $answer->id) }}" method="post" enctype="multipart/form-data">
                @csrf   
                @method('PUT')           
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Choice1:</strong>
                <input type="text" name="choice1" class="form-control" value='{{$answer->choice1}}'>
                @error('choice1')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Choice2:</strong>
                      <input type="text" name="choice2" class="form-control" value='{{$answer->choice2}}'>
                      @error('choice2')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <strong>Choice3:</strong>
                  <input type="text" name="choice3" class="form-control" value='{{$answer->choice3}}'>
                  @error('choice3')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <strong>Choice4:</strong>
                  <input type="text" name="choice4" class="form-control" value='{{$answer->choice4}}'>
                  @error('choice4')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <strong>Correct:</strong>
                  <input type="text" name="correct" class="form-control" value='{{$answer->correct}}'>
                  @error('correct')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Exam name:</strong>
                <select name="exam_id">
                  <?php
                      foreach ($exam as $item ) { ?>
                        <option value="{{ $item->id }}">
                          {{ $item->name }}
                        </option>
                  <?php  } ?>
                </select>
                @error('exam_id')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <strong>Quistion name:</strong>
                  <select name="q_id">
                    <?php
                        foreach ($question as $items) { ?>
                          <option value="{{ $items->id }}">
                            {{ $items->question }}
                          </option>
                    <?php  } ?>
                  </select>
                  @error('q_id')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                 </form>
            </div>
          </div>
        </div>



        
@endsection