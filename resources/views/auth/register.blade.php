@extends('layouts.app')

@section('content')
<section class="Login" >
    <div class="container mt-5 ">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
       <div class="card mb-5">
          <div class="login-card-header mt-3">Sign Up and Start Learning! </div>
          <div class="card-body">
            <form method="post" action="">
               @csrf
             <div id="form-register" >
                <div class="form-group ">
                   <label for="email" class="control-label">E-Mail Address</label>
                   <input id="email" type="email" class="form-control email-input" name="email">
                   @error('email')
                     <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group ">
                   <label for="name" class="control-label">Name</label>
                   <input id="name" type="text" class="form-control full-name-input" name="name" value="" >
                   @error('name')
                     <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                </div>
                <div class="form-group ">
                   <label for="password" class="control-label">Password</label>
                   <input id="password" type="password" class="form-control password-input" autocomplete="off" name="password" >
                   @error('password')
                     <div class="error">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
               </form>
             </div>
             <div class="mt-4">
               <span>Already have an account? <a class="ms-1 regster-href" href="login.html">Login</a> </span>
            </div>
          </div>
       </div>
    </div>
    <div>
 </section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
