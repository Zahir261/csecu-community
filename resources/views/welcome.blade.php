@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-6">
            <h3 class="h3">Registration</h3>

            <form action="{{route('registration')}}" method="post">
                <div class="form-group {{$errors->has('first_name') ? 'has-error': ''}}">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name"
                           value="{{Request::old('first_name')}}">
                </div>
                <div class="form-group {{$errors->has('last_name') ? 'has-error': ''}}">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name"
                           value="{{Request::old('last_name')}}">
                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('std_id') ? 'has-error': ''}}">
                    <label for="std_id">Student ID</label>
                    <input class="form-control" type="text" name="std_id" id="std_id"
                           value="{{Request::old('std_id')}}">
                </div>
                <div class="form-group {{$errors->has('session') ? 'has-error': ''}}">
                    <label for="session">Session</label>
                    <input class="form-control" type="text" name="session" id="session"
                           value="{{Request::old('session')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                    <label for="password">password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>

        <div class="col-6">
            <h3>Login</h3>
            <form action="{{route('login')}}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                    <label for="password">password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
@endsection