@extends('admin.layouts.layout')
@section('content')
    <h1>Update Subject Page</h1>
    <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
        @csrf
        <label for="subject_name">Subject Name</label>
        <input type="text" name="subject_name" id="subject_name" value="{{ $subject->name }}" required>
        <label for="subject_desc">Subject Description</label>
        <input type="text" name="subject_desc" id="subject_desc" value="{{ $subject->description }}" required>
        <button>Submit</button>
    </form>
@endsection