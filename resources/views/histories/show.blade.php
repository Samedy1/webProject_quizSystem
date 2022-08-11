@extends('layouts.layout')
@section('content')
    <div class="container">
        <h2 class="h2 heading">Your Result</h2>
        <h3 class="h4 ml-4">Date: {{ $info['history']->created_at }}</h3>
        <h3 class="h4 ml-4">Subject: {{ $info['history']->subject }}</h3>
        <div class="">
            @foreach($info['questions'] as $question)
                <div class="p-4 m-4 rounded bg-gray-200">
                    <div class="h4 p-4">
                        {{ $loop->index + 1}}. {{ $question->question }}<br>
                    </div>
                    <div class="">
                        <div class="ml-5">Your choice: {{ $info['history']->selected_choices[$loop->index] }}</div>
                        <div class="ml-5">Correct choice: {{ $question->correct_option }}</div>
                    </div>
                </div>
            @endforeach
            <div class="h3 mt-5 mb-5">
                Your score: {{ $info['history']->score }}/100
            </div>
        </div>
    </div>
@endsection