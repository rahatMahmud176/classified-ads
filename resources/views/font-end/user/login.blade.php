@extends('font-end.master')
@section('title')
    Login
@endsection
@section('main-content')

<div class="row m-3">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
               User Login Form:
            </div>
            <div class="card-body">
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">Phone or, Email</label>
                      <input type="email" id="form2Example1" class="form-control" />
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" />
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input style="margin-left: 0; margin-top: 6px;" class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label  class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="button" class="btn btn-primary btn-block mb-4">Login</button>
                  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a class="text-primary" href="{{ route('user-register') }}">Register</a></p>
                       
                    </div>
                  </form>
            </div>
          </div>
    </div>
    <div class="col-md-4"></div>
</div>

    
@endsection