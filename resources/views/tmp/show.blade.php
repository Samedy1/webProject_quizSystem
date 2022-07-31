@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Subject</h1>
    
        <div class="box-container">
            @foreach ($subjects as $subject)
                <div class="box">
                    <img src="/storage/img/subjects/{{ $subject->img }}" alt="">
                    <h3>{{ $subject->name }}</h3>
                    <p>{{ $subject->description }}</p>
                    <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn">Delete</button>
                    </form>
                    <form action="">
                        @csrf
                        <button class="btn">Update</button>
                    </form>
                </div>
            @endforeach
        </div>
    
    </div>
</div>
@endsection