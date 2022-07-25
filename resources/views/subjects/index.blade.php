@extends('layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Subject</h1>
    
        <div class="box-container">
            @foreach ($subjects as $subject)
                <div class="box">
                    <img src="{{ $subject->img }}" alt="">
                    <h3>{{ $subject->name }}</h3>
                    <p>C, C++</p>
                    <a href="/questions/{{ $subject->id }}" class="btn">Play Now</a>
                </div>
            @endforeach
        </div>
    
    </div>
</div>
@endsection