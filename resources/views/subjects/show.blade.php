@extends('layouts.layout')
@section('content')
<div>
    <h1>Result</h1>

    <p>Your answer: </p>

    @foreach($selected_choices as $selected_choice)
        {{ $loop->index + 1 }} {{ $selected_choice }},
    @endforeach

    <p>Correct answer: </p><br>

    @foreach($correct_options as $correct_option)
        {{ $loop->index + 1 }} {{ $correct_option }},
    @endforeach

    @php
        $score = 0;
    @endphp
    @for($i = 0; $i < count($selected_choices); $i++)
        @if ($selected_choices[$i] == $correct_options[$i])
            @php
                $score++;   
            @endphp
        @endif
    @endfor

    <p> Your score: {{ $score }}</p>
</div>
@endsection