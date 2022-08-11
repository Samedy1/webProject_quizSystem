@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <h1 class="heading">Welcome - {{ Auth::user()->name }}</h1>
    </div>
@endsection