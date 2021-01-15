@extends('master')
@section('content')

<div class="container-fluid ">
  <div class="row no-gutter">
      <div class="col-md-6 d-none d-md-flex bg-image image" ></div>
      <div class="col-md-6 bg-light">
          <div class="login d-flex align-items-center py-5">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-10 col-xl-7 mx-auto">
                          <h3 class="display-4 text-center pb-3">Login</h3>
                          <form action="/login" method="POST">
                            @csrf
                              <div class="form-group mb-3">
                                  <input id="inputEmail" type="email" name="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                              </div>
                              <div class="form-group mb-3">
                                  <input id="inputPassword" type="password" name="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                              </div>
                              <div class="custom-control custom-checkbox">
                                  <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                              </div>
                              <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">login</button>
                              <a href="/register">Belum punya akun? </a>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
