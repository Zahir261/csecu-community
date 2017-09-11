@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="std_id">Student ID</label>
                    <input class="form-control" type="text" name="std_id" id="std_id">
                </div>
                <div class="form-group">
                    <label for="session">Session</label>
                    <input class="form-control" type="text" name="session" id="session">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
            </form>
        </div>

    </div>
@endsection