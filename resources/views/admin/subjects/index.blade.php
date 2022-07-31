@extends('admin.layouts.layout')
@section('content')
<!-- ======================= Cards ================== -->
<div class="">
    
    <div class="container">

        <h1 class="heading">Subject</h1>
        <h3 class="Addsubject"><a href="{{ route('admin.subjects.create') }}" class="btn">Add Subject +</a></h3>
    
        <div class="box-container">
            @foreach ($subjects as $subject)
                <div class="box">
                    <img src="/storage/img/subjects/{{ $subject->img }}" alt="">
                    <h3>{{ $subject->name }}</h3>
                    <p>{{ $subject->description }}</p>
                    <a href="{{ route('admin.subjects.show', $subject->id) }}" class="btn">Edit</a>
                </div>
            @endforeach
        </div>
    
    </div>
</div>
@endsection