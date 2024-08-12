@extends('layouts.app')
@section('contenido')
<div class="row">
    <div class="col-6" p-3 t-5 b-3>
        <form action={{route('login')}} method="POST">
            @csrf

            @if(@session('mensaje'))
                <p class="bg-danger text-white text-center rounded-4 p-2">
                {{session('mensaje')}}</p>
            @endif

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" name="email" id="form1Example1" class="form-control" />
              <label class="form-label" for="form1Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" name="password" id="form1Example2" class="form-control" />
              <label class="form-label" for="form1Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>
    </div>
    <div class="col-6">
        <img src="https://i.pinimg.com/originals/0e/70/f0/0e70f05ff16a8e4d45a1e672d85b4e3b.jpg" alt="" width="100%">
    </div>
</div>
@endsection
