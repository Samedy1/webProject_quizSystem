@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Subject</h1>
    
        <div class="box-container">
            <div class="box">
                <img src="/img/subjects/{{ $subject->img }}" alt="">
                <h3>{{ $subject->name }}</h3>
                <p>{{ $subject->description }}</p>
                <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>

                    <a href="{{ route('admin.subjects.edit', $subject->id) }}" class="btn">Update</a>
                    <a href="{{ route('admin.questions.create', $subject->id) }}" class="btn">Add Questions</a>
                </form>
            </div>
        </div>

        <div class="question-list">
            <h1 class="heading">Questions</h1>
            @foreach($questions as $question)
                <div class="question-item">
                    <div class="question-header">
                        {{-- <div class="question-overlay">
                            <p>{{ $loop->index + 1 }} - {{ $question->question }}</p>
                        </div> --}}
                        <p>{{ $loop->index + 1 }} - {{ $question->question }}</p>

                    </div>

                    @foreach($question->choices as $choice)
                        <div class="question-choice">
                            <ul>
                                <li>{{ $choice }}</li>
                            </ul>
                        </div>
                    @endforeach

                    <form action="{{ route('admin.questions.destroy', $question->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a class="btn-question-update" href="{{ route('admin.questions.edit', $question->id) }}">Update</a>
                        <button class="btn-question-delete bg-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection