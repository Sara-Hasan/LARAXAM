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
            <form action="{{ route('exams.update', $exam->id) }}" method="post" enctype="multipart/form-data">
            @csrf     
            @method('PUT')         
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Exam Name:</strong>
            <input type="text" name="name" class="form-control" value="{{ $exam->name }}">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Exam desc:</strong>
            <input type="text" name="description" class="form-control" value="{{ $exam->description }}">
            @error('description')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="img">Image Upload</label>
                  <input type="file" name="image_exam" id="img" required value="{{ $exam->image_exam }}">
              @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              </div>
          </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Exam Time:</strong>
            <input type="number" name="time" class="form-control">
            @error('time')
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