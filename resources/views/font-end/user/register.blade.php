@extends('font-end.master')
@section('title')
    Login
@endsection
@section('main-content')

<div class="row m-3">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
               User Register Form:
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                      <div class="col-sm-6 form-group ">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="col-sm-6 form-group">
                        <input type="text" class="form-control" placeholder="Last name">
                      </div>
                      <div class="col-sm-6 form-group">
                        <input type="number" class="form-control" placeholder="Pnone Number">
                      </div>
                      <div class="col-sm-6 form-group">
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="col-sm-6 form-group">
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="col-sm-6 form-group">
                        <input type="password" class="form-control" placeholder="RE-Password">
                      </div>
                      <div class="col-12 form-group">
                        <button type="submit" class="btn btn-primary container-fluid">Click for Register</button>
                      </div>
                    </div>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Already a member? <a class="text-primary" href="{{ route('user-login') }}">Login</a></p>
                         
                      </div>
                  </form>
            </div>
          </div>
    </div>
    <div class="col-md-2"></div>
</div>

    
@endsection