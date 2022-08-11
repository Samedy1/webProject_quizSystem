@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    {{-- <div class="container">

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
    </div> --}}

    <div class="container">
        <h1 class="heading">Create a Question</h1>
        <form action="{{ route('admin.subjects') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="">
                <div class="bg-gray-100 w-75 m-auto p-5 rounded">
                    <div class="form-group mb-4">
                        <label for="subject_name" class="form-label text-lg">Subject Name</label>
                        <input type="text" class="form-control rounded border-secondary" name="subject_name" id="subject_name" placeholder="Enter the subject name" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="subject_img" class="form-label text-lg">Subject Image</label>
                        <input type="file" class="form-control border-secondary" name="subject_img" id="subject_img" accept="image/*">
                    </div>
                    <div class="form-group mb-4">
                        <label for="subject_desc" class="form-label text-lg">Subject Description</label>
                        <textarea type="text" class="form-control rounded border-secondary" name="subject_desc" id="subject_desc" placeholder="Enter the subject description"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn-submit" onclick="return confirm('Are you sure?')">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    
    </div>
</div>
@endsection