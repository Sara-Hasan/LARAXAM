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
            <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf     
                @method('PUT')         
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <strong>Email:</strong>
                  <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                  @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                      <strong>Password:</strong>
                      <input type="password" name="password" class="form-control" value="{{ $user->password }}">
                      @error('password')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                      </div>
                  </div>    
                <button type="submit" class="btn btn-success ml-3">Submit</button>
                 </form>
            </div>
          </div>
        </div>
@endsection