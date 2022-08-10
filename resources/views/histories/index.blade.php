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
                    <td><a class="text-primary" href="{{ route('histories.show', [Auth::user()->id, $history->id]) }}">See more...</a></td>
                    <td>
                      <form action="{{ route('histories.destroy', [Auth::user()->id, $history->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-danger" onclick="return confirm('Are you sure?')">Delete...</button>
                      </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
          <form action="{{ route('histories.clear', Auth::user()->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn bg-danger text-white" onclick="return confirm('Are you sure?')">Clear History</button>

          </form>
    </div>

@endsection