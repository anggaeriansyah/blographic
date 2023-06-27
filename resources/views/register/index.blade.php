@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration">
                <img class="mb-4 mt-4 mx-auto d-block" src="/img/bg-02.png" alt="" width="150" height="150">
                <h1 class="h3 mb-3 text-center">Please Sign up</h1>
                <form action="/register" method="post">
                    @csrf
                    {{-- <img class="mb-4 align-center" src="/img/kzn.png" alt="" width="100" height="100"> --}}

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                            id="name" placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Sign up</button>
                </form>
                <small class="d-block text-center mt-3">Already Registered? <a href="/login"
                        class="text-decoration-none">Sign In</a></small>
            </main>
        </div>
    </div>

@endsection
