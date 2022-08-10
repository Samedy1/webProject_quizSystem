@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Create a Question</h1>
        <form action="{{ route('admin.questions') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input type="checkbox" id="subject_id" name="subject_id" checked value="{{ $subject_id }}" style="display:none;">

            <div class="bg-gray-100 w-75 m-auto p-5 rounded">
                <div class="form-group mb-4">
                    <label for="question_name" class="form-label text-lg">Question</label>
                    <input type="text" class="form-control rounded" name="question_name" id="question_name" placeholder="Enter a question" required>
                </div>
                <div class="form-group mb-4">
                    <label for="choices" class="form-label text-lg">Choices</label>
                    <table><tr><td><input type="text" class="form-control rounded mb-2" name="choices[]" id="choices" placeholder="Enter a choice" required></td></tr></table>
                    <table id="dynamic"></table>
                    <div class="mt-2">
                        <div id="add-btn" class="btn bg-primary text-white">Add</div>
                        <div id="delete" class="btn bg-danger text-white">Delete</div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="correct_option" class="form-label text-lg">Correct Option</label>
                    <input type="text" class="form-control rounded" name="correct_option" placeholder="Enter the correct choice" required>
                </div>
                <div class="form-group mt-4">
                    <button class="btn bg-submit text-white">Submit</button>
                </div>
            </div>

        </form>
    
    </div>
    <script>
        document.getElementById("add-btn").onclick = function () {
             document.getElementById("dynamic").insertRow().innerHTML = "<input type=\"text\" class=\"form-control rounded mb-2\" name=\"choices[]\" placeholder=\"Enter a choice\" required>";
             document.getElementById("delete").innerHTML = "Delete"; 
         };
 
         var rowCount = document.getElementById("dynamic").rows.length;
         document.getElementById("delete").onclick = function () {
             document.getElementById("dynamic").deleteRow(-1);
         }
     </script>
</div>
@endsection