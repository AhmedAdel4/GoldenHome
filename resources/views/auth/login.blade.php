@extends('auth.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('admin.home') }}"><b>Golden Home</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">قم بتسجيل الدخول</p>

            <form action="{{ route('login') }}" method="post">
              @csrf
                <div class="input-group mb-3">
                  <input type="text"  name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="User Name" required autocomplete="name" autofocus> @error('name')
                  <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <span style="text-align: right" class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> @enderror
                </div>
                <div class="input-group mb-3">
                  <input id="password" type="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                  <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> @enderror
                </div>
                <div class="row">
                   
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">تسجيل</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            
           
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection
