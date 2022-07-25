@extends('layouts.layout')
@section('content')
<div class="wrapper question-form">
    <form action="/questions/result" method="POST">
        @csrf
        {{-- send questions to the controller for handling the attribute like id, correct option --}}
        <input type="checkbox" id="questions" name="questions" checked value="{{ $questions }}" style="display:none;">
        <h1>Questions</h1>
        <div>
            
            @foreach($questions as $question)
                <div class="wrapper bd-r-10 box-shadow">
                    <div class="title">{{ $question->question}}</div>
                    @foreach($question->choices as $choice)
                        <input type="radio" id="{{ $question->id }}-{{ $choice }}" name="selected_choice{{$question->id}}" value="{{ $choice }}" required>
                        <label for="{{ $question->id }}-{{ $choice }}">{{ $choice }} - selected_choice{{$question->id}}</label><br>
                    @endforeach
                </div>
            @endforeach
        </div>
        <button>Submit</button>
    </form>
</div>
@endsection