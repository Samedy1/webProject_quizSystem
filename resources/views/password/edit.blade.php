@extends('layouts.layout')
@section('content')
    <div class="setting-box" style="height: 350px;">
        <img src="/img/users/user.png" class="mb-5">

        <form action="{{ route('password.update', Auth::user()->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="password" name="newpass" placeholder="Enter your new password" required>
            <input type="password" name="confirmpass" placeholder="Confirm password" required>
            <button style="float: left; margin: 10px 0 10px 130px" onclick="return confirm('Are you sure?')">DONE</button>
        </form>
        <br><br>
    </div>

    <div class="w-50 m-auto">
        <p class="text-primary">{{ session('mssg') }}</p> {{-- session data --}}
    </div>

    
@endsection