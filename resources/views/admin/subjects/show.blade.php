@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Subject</h1>
    
        <div class="box-container">
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
                <a href="{{ route('admin.questions.create', $subject->id) }}" class="btn">Add Questions</a>
            </div>
        </div>

        <div class="question-list">
            <h1>Questions</h1>
            @foreach($questions as $question)
                <div class="question-item">
                    <p>{{ $loop->index + 1 }} - {{ $question->question }}</p>
                    @foreach($question->choices as $choice)
                        <ul>
                            <li>{{ $choice }}</li>
                        </ul>
                    @endforeach
                    <form action="">
                        @csrf
                        <button>Delete</button>
                    </form>
                    <a href="">Update</a>
                </div>
            @endforeach
        </div>
    
    </div>
</div>
@endsection