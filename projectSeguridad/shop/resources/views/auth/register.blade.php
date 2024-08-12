@extends('layouts.app')

@section('contenido')
    <div class="row">
        <div class="col-6">
            <img src="https://i.pinimg.com/originals/0e/70/f0/0e70f05ff16a8e4d45a1e672d85b4e3b.jpg" alt=""
                width="100%">
        </div>

        <div class="col-6" p-3 t-5 b-3>
            <div class="card">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="name" name="name" class="form-control" />
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <!-- User name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control" />
                        <label class="form-label" for="username">User Name</label>
                    </div>


                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" />
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <!-- Password Confirmation input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                            required />
                        <label class="form-label" for="password_confirmation">Password Confirmation</label>
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
        </div>
    </div>

@endsection
