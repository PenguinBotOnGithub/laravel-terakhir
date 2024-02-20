@extends('layouts.main')

@section('content')
    <style>
        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger col-lg-12" role="alert">
            {{-- {{ session('error') }} --}}
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <div class="d-flex align-items-center py-4 bg-body-tertiary">
        <main class="form-signin w-100 m-auto">
            <form method="post" action="/login">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <div class="my-2">
                    <a class="link-primary link-opacity-100 form-text" href="/register">Don't have an account?</a>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
        </main>
    </div>
@endsection
