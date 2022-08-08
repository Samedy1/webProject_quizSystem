@extends('layouts.layout')
@section('content')
    <h1>History of {{ Auth::user()->name }}</h1>

    <table style="border: 1px solid;">
        <thead>
            <tr style="border-bottom: 1px solid;">
                <td>score</td>
                <td>subject</td>
                <td>date</td>
            </tr>
        </thead>
        @foreach ($histories as $history)
            <tr style="border-bottom: 1px solid;">
                <td>{{ $history->score }}</td>
                <td>{{ $history->subject }}</td>
                <td>{{ $history->created_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection