@extends('admin.layouts.layout')
@section('content')
<!-- ======================= Cards ================== -->
<div class="">
    
    <div class="container">
        <h1 class="mb-5 h1 heading">User List</h1>

        <table class="table table-striped m-auto">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joining Date</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection