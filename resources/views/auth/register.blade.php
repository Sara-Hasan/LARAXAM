@extends('layouts.app')

@section('content')
<section class="Login" >
    <div class="container mt-5 ">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
       <div class="card mb-5">
          <div class="login-card-header mt-3">Sign Up and Start Learning! </div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
               @csrf
             <div id="form-register" >
                <div class="form-group ">
                   <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                   <label for="name" class="control-label">{{ __('Name') }}</label>
                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="form-group ">
                   <label for="password" class="control-label">{{ __('password') }}</label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                 </div>
                <div class="form-group">
                   <button type="submit" class="btn primaryBtn white full-width">Register</button>
                </div>
               </form>
             </div>
             <div class="mt-4">
               <p>Already have an account? <a class="ms-1 regster-href" href="{{ route('login') }}">Login</a> </p>
            </div>

          </div>
       </div>
    </div>
    <div>
 </section>
@endsection
