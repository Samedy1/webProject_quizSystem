@extends('layouts.layout')
@section('content')
    <div class="setting-box">
        <img src="/img/users/user.png" class="mb-5">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="password" name="newpass" placeholder="Enter your new password" required>
            <input type="password" name="confirmpass" placeholder="Enter your confirm password" required>
            <button style="float: left; margin: 10px 0 10px 130px" onclick="return confirm('Are you sure?')">DONE</button>
        </form>
    </div>
@endsection