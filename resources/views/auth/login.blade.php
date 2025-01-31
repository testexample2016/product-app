@extends('layouts.app')

@section('content')

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label" >Email address</label>
                                <input type="email" class="form-control" id="email"  placeholder="Enter email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" >Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="text-decoration-none">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection