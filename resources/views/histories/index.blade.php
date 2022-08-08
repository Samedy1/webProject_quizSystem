@extends('layouts.layout')
@section('content')
    <div class="history wrapper">
        <h1 class="mb-5 h1">History of {{ Auth::user()->name }}</h1>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">Score</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $history->subject }}</td>
                    <td>{{ $history->score}}</td>
                    <td>{{ $history->created_at}}</td>
                    <td><a class="text-primary" href="">See more...</a></td>
                </tr>
            @endforeach
            </tbody>
          </table>
          <button class="btn bg-primary text-white">Clear History</button>
    </div>

@endsection