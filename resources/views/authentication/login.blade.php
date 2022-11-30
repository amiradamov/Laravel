@extends('layouts.app')

@section('content')
<h4>Login</h4>
    <hr>
<form action="">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
    </div>
    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="name" value="">
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-primary" type="submit">
            Log in
        </button>
    </div>
</form>
<br>
<a href="registration">New user !! Register Here.</a>
@endsection

@section('footer')
{{-- <script>alert('Hello world')</script> --}}
@endsection