@extends('layouts.app')

@section('content')
<h4>Login</h4>
    <hr>
<form action="{{route('login-user')}}" method="POST">
    @csrf
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{ old('email') }}" autocomplete="new-password">
    </div>
    @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
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