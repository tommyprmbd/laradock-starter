@extends('admin.auth.base', ['title'=>'Login'])
@section('content')
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
    </div>
    @if (session('error'))
        {{ session('error') }}
    @endif
    <form class="user" method="post" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Enter Email Address..." autofocus>
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="Password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" value="1" name="remember" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember
                    Me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="{{ route('admin.forgot-password') }}">Forgot Password?</a>
    </div>
@endsection