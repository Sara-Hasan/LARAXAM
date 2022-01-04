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
            <form action="{{ route('question.update', $question->id) }}" method="post" enctype="multipart/form-data">
                @csrf         
                @method('PUT')     
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Question:</strong>
                <input type="text" name="question" class="form-control" value={{ $question->question }}>
                @error('question')
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
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                 </form>
            </div>
          </div>
        </div>
@endsection