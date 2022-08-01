@extends('admin.layouts.layout')
@section('content')
    <h1 class="heading">Update Subject Page</h1>
    <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
        @csrf
        <div class="containBx_subject">
            <div class="form_subjectBx">
                <div class="inputBx_subject_name">
                    <label for="subject_name">Subject Name</label>
                    <input type="text" name="subject_name" id="subject_name" value="{{ $subject->name }}" required>
                </div>
                <div class="inputBx_subject_desc">
                    <label for="subject_desc">Subject Description</label>
                    <input type="text" name="subject_desc" id="subject_desc" value="{{ $subject->description }}" required>
                </div>
                <div class="submit">
                    <button>Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection