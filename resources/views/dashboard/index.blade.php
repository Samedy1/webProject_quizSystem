@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1 class="h1">Welcome {{ Auth::user()->name }}</h1>
    </div>
@endsection