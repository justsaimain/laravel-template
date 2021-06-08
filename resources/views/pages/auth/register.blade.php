@extends('pages.auth.layouts.master')

@section('content')

    <div class="form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-5">

                <a class="text-center" href="index.html">
                    <h4>Register Account</h4>
                </a>

                <form class="mt-5 mb-5 login-input">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button class="btn login-form__btn submit w-100">Sign Up</button>
                </form>
                <p class="mt-5 login-form__footer">Have account <a href="{{ url('/login') }}" class="text-primary">Sign In
                    </a>
                    now</p>
                </p>
            </div>
        </div>
    </div>

@endsection
