@extends('guest_layouts.app')

@section('content')
<div class="container my-5 card shadow shadow-lg rounded">
    <div class="row">
        <div class="col-lg-8 col-md-4 col-sm-12 d-flex align-items-center justify-content-center p-5">
            <img src="{{  asset('images/landing-page-leftside.png') }}" alt="" height="400">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 border bg-base">
            <div class="d-flex align-items-center justify-content-center flex-column py-2 mt-5">
                <img src="images/logo.png" height="100" width="100" alt="Logo" class="mt-5">
                <h3 class="text-orange my-2">Admin Login</h3>
            </div>
            <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="row mx-5 my-1">
                <div class="col">
                    <label class="text-light">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control w-60 @error('email') is-invalid @enderror">
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="row mx-5 my-1">
                <div class="col">
                    <label class="text-light">Password</label>
                    <input type="password" name="password"  class="form-control w-60 @error('password') is-invalid @enderror">
                </div>
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="row mx-5 my-1">
                <div class="col-6">
                    <input type="checkbox" name="" id="" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-light">Remember Me</label>
                </div>
                <div class="col-6">
                    <a href="{{ route('password.request') }}" class="text-orange text-decoration-none">Forgot Password?</a>
                </div>
            </div>

            <div class="row mx-5 my-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-base w-100">Login</button>
                </div>

            </div>

            </form>
        </div>
    </div>
</div>
@endsection
