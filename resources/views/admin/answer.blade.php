@extends('admin.masteradmin')
@section('content')
 <div class="container-fluid mt--7">
<div class="col-xl-8 mb-5 mb-xl-0">
<?php if (isset( $_GET["do"])) {?>
             <div class="row" style='border-radius: 5px; background-color: #ffffff;  padding: 20px;'>
              <form action="{{ route('answer.store') }}" method="post" enctype="multipart/form-data">
              @csrf              
              <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
              <strong>Choice1:</strong>
              <input type="text" name="choice1" class="form-control" >
              @error('choice1')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
              </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Choice2:</strong>
                    <input type="text" name="choice2" class="form-control" >
                    @error('choice2')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Choice3:</strong>
                <input type="text" name="choice3" class="form-control" >
                @error('choice3')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Choice4:</strong>
                <input type="text" name="choice4" class="form-control" >
                @error('choice4')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Correct:</strong>
                <input type="text" name="correct" class="form-control" >
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
               <?php
              }else{
           ?>          
          </div>
        
            
    <!-- Form -->
    <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Answer tables</h3>
              <a class="create" href="?do=add"><button type="button" class="btn btn-success left">Create answer</button></a>
              @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{ $message }}</p>
                </div>
              @endif
              @if (count($errors)>0 )
                @foreach($errors as $error)
                  <div class="alert alert-danger">
                    {{ $error }}
                  </div>
                @endforeach
              @endif
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">choice1</th>
                    <th scope="col">choice2</th>
                    <th scope="col">choice3</th>
                    <th scope="col">choice4</th>
                    <th scope="col">correct</th>
                    <th scope="col">Number Question</th>
                    <th scope="col">Exam name</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($answer as $item)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $item->id }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      {{ $item->choice1 }}
                    </td>
                    <td>
                        {{ $item->choice2 }}
                    </td>
                    <td>
                      {{ $item->choice3 }}
                    </td>
                    <td>
                        {{ $item->choice4 }}
                    </td>
                    <td>
                        {{ $item->correct }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> {{ $item->exam_id}}
                      </span>
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-warning"></i> {{ $item->q_id}}
                        </span>
                      </td>
                    <td class="text-right">
                      <form action="{{ route('answer.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('answer.edit',$item->id) }}"><i class="far fa-edit"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div></div>
      <?php
    }
 ?>
@endsection