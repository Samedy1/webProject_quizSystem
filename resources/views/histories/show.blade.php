@extends('layouts.layout')
@section('content')
    <h2 class="h2">Your history</h2>
    <h3 class="h4">Date: {{ $info['history']->created_at }}</h3>
    <h3 class="h4">Subject: {{ $info['history']->subject }}</h3>
    <div>
        @foreach($info['questions'] as $question)
            <div class="wrapper bd-r-10 box-shadow">
                <div class="title">
                    {{ $loop->index + 1}}. {{ $question->question }}<br>
                    - Your choice: {{ $info['history']->selected_choices[$loop->index] }}<br>
                    - Correct choice: {{ $question->correct_option }}
                </div>
            </div>
        @endforeach
        <div>
            Your score: {{ $info['history']->score }}
        </div>
    </div>
@endsection