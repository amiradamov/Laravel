@extends('layouts.app')

@section('content')
    <h4>Hello There</h4>
    <hr>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="logout">Logout</a></td>
            </tr>
        </tbody>
    </table>
@endsection

@section('footer')
{{-- <script>alert('Hello world')</script> --}}
@endsection