{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body> --}}
    {{-- <form action="/login" method="POST">
        @csrf
        username/email
        <input type="text" name="username" id="">

        password
        <input type="password" name="password" id="">

        <input type="submit" value="Login">
    </form> --}}
@extends('layouts.auth-master')

@section('content')
<form action="/login" method="POST">
    @csrf
    <h1>Login</h1>
    @include('layouts.partials.messages')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <a href="/register">Create account</a>

        {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
   
{{-- 
</body>

</html> --}}
