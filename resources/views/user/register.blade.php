@extends('layout.authorization')
@section('title', 'Register')

@section('content')
    <form action="{{ route('register.store') }}" method="post">
      @csrf
      
      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
          @error('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}">
          @error('email')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
          @error('password')
              <div class="invalid-feedback">
                {{$message}}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label for="cPassword" class="form-label">Confirmation Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="cPassword">
        </div>
      <label for="captcha" class="form-label">Captcha Verification</label>
      <div class="input-group mb-3">
        <span class="input-group-text bg-dark text-white" id="basic-addon1"><span id="a"> </span> + <span id="b"> </span> = </span>
        <input type="number" class="form-control" id="captcha" name="captcha">
      </div>
      <button type="submit" class="btn btn-primary w-100 mb-3" id="register" disabled>Register</button>
      <a href="/login" class="text-center d-block">Login</a>
    </form>
@endsection