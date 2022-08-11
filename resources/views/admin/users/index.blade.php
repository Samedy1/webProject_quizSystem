@extends('admin.layouts.layout')
@section('content')
<!-- ======================= Cards ================== -->
<div class="">
    
    <div class="container">
        <h1 class="mb-5 h1 heading">User List</h1>

        <table class="table table-striped m-auto">
            <thead>
              <tr class="bg-primary text-white">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joining Date</th>
              </tr>
            </thead>
            <tbody>
                @php $total_user = 0; @endphp
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->created_at}}</td>
                </tr>
                @php $total_user++ @endphp
            @endforeach
            </tbody>
          </table>
          <div class="mt-5 h4">Total user: {{ $total_user }}</div>
    </div>
</div>
@endsection