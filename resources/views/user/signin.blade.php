@extends('layouts.master')

@section('title')
signin
@endsection
@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="mb-4 mt-4 text-center">Sign in</h1>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>

        @endif
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Enter your password">
            </div>
            <button class="btn btn-primary" type="submit">Sign In</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection