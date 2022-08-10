@extends('layouts.layout')
@section('content')
<div class="wrapper question-form">
    <form action="/questions/result" method="POST">
        @csrf
        {{-- send questions to the controller for handling the attribute like id, correct option --}}
        <input type="checkbox" id="questions" name="questions" checked value="{{ $questions }}" style="display:none;">
        <h1 class="heading">Questions</h1>
        <div class="question-user-item">
            <div>
            @foreach($questions as $question)
                <div class="wrapper-cut">
                    <div class="title-user-question">{{ $question->question}}</div>
                    @foreach($question->choices as $choice)
                    <div class="question-user-choice">
                        <input type="radio" id="{{ $question->id }}-{{ $choice }}" name="selected_choice{{$question->id}}" value="{{ $choice }}" required>
                        <label for="{{ $question->id }}-{{ $choice }}">{{ $choice }} - selected_choice{{$question->id}}</label><br>
                    </div>
                    @endforeach
                </div>
            
            @endforeach
            </div>
        <button class="btn-question-submit">Submit</button>
    </form>
</div>
@endsection
