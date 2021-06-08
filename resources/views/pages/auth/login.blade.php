@extends('pages.auth.layouts.master')

@section('content')

    <div class="form-input-content">
        <div class="card login-form mb-0">
            <div class="card-body pt-5">
                <a class="text-center" href="index.html">
                    <h4>Login Account</h4>
                </a>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form class="mt-5 mb-5 login-input" method="POST" action="{{ url('/login') }}">
                    @csrf

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button class="btn login-form__btn submit w-100" type="submit">Sign In</button>
                </form>
                <p class="mt-5 login-form__footer">Dont have account? <a href="{{ url('/register') }}"
                        class="text-primary">Sign
                        Up</a> now</p>
            </div>
        </div>
    </div>

@endsection
