@extends('back-end.admin.master')
@section('title')
    Register admin
@endsection
@section('main-content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                    <div class="card-body">
                         
                         
                        {{ Form::open(['route'=>'admin.store']) }}    
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                       <input name="name" class="form-control" maxlength="30" required id="inputFirstName" type="text" placeholder="Enter your Full name" />
                                        <label for="inputFirstName">Full name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input  name="phone_number" maxlength="11" required class="form-control" id="inputLastName" type="tel" placeholder="Enter your Phone Number" />
                                        <label for="inputLastName">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" maxlength="30" required id="inputEmail" type="email" placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input name="password" maxlength="30" class="form-control" required id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input name="password_confirmation" maxlength="30" required class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0"> 
                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit"> Create Account</button></div>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ asset('/login') }}">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection