@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Create a Subject</h1>
        <form action="{{ route('admin.subjects') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="subject_name">Subject Name</label>
            <input type="text" name="subject_name" id="subject_name" required>
            <label for="subject_img">Subject Image</label>
            <input type="file" name="subject_img" id="subject_img">
            <label for="subject_desc">Subject Description</label>
            <input type="text" name="subject_desc" id="subject_desc">
            <button>Submit</button>
        </form>
    
    </div>
</div>
@endsection