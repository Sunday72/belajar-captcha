@extends('layout.authorization')
@section('title', 'Login')

<div class="fixed-top">
    @if (session()->has("register-success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('register-success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
@section('content')
    <form action="" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="floatingInput" class="form-label">Email address</label>
            <input type="text" name="name" class="form-control" id="floatingInput">
        </div>
        <div class="mb-4">
            <label for="floatingPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="floatingPassword">
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        <a href="{{route('register.index')}}" class="text-center d-block">Register</a>
    </form>
@endsection