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
       
        <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
          <strong>Category Name:</strong>
          <input type="text" name="name" class="form-control" placeholder="movies Name" value=" {{ $category->name}}">
          @error('movie_name')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
          <strong>Category desc:</strong>
          <input type="text" name="description" class="form-control" placeholder="movies Desc" value=" {{ $category->description}}">
          @error('movie_description')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
          </div>
          <button type="submit" class="btn btn-primary ml-3">Submit</button>
          </div>
          </div>
           </form>
          </div>
        </div>
@endsection