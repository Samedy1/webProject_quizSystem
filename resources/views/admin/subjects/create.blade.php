@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Create a Subject</h1>
        <form action="{{ route('admin.subjects') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="containBx_subject">
                <div class="form_subjectBx">
                    <div class="inputBx_subject_name">
                        <label for="subject_name">Subject Name</label>
                        <input type="text" name="subject_name" id="subject_name" required>
                    </div>
                    <div class="inputBx_subject_Image">
                        <label for="subject_img">Subject Image</label>
                        <input type="file" name="subject_img" id="subject_img">
                    </div>
                    <div class="inputBx_subject_desc">
                        <label for="subject_desc">Subject Description</label>
                        <textarea type="text" name="subject_desc" id="subject_desc"></textarea>
                    </div>
                    <div class="submit">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection