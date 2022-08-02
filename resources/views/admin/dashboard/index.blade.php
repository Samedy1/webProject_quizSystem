@extends('admin.layouts.layout')
@section('content')
    <h1>Dashboard for admin - {{ Auth::user()->name }}</h1>
@endsection