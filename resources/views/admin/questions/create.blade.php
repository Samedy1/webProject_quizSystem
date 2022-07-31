@extends('admin.layouts.layout')
@section('content')
<div class="">
    
    <div class="container">

        <h1 class="heading">Create a Question</h1>
        <form class="question-form" action="{{ route('admin.questions') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input type="checkbox" id="subject_id" name="subject_id" checked value="{{ $subject_id }}" style="display:none;">

            <label for="question_name">Question</label>
            <input type="text" name="question_name" id="question_name" required>
            <label for="choices" id="add-btn">Add Choices</label><br>
            <tr><td><input type="text" name="choices[]" id="choices" required></td></tr>
            <table id="dynamic" cellspacing=0></table>
            <p id="delete">Delete</p>
            <label for="correct_option">Correct Option</label>
            <input type="text" name="correct_option" required>
            <button>Submit</button>
        </form>
    
    </div>
    <script>
        document.getElementById("add-btn").onclick = function () {
             document.getElementById("dynamic").insertRow().innerHTML = "<input type=\"text\" name=\"choices[]\" required>";
             document.getElementById("delete").innerHTML = "Delete"; 
         };
 
         var rowCount = document.getElementById("dynamic").rows.length;
         document.getElementById("delete").onclick = function () {
             document.getElementById("dynamic").deleteRow(-1);
         }
     </script>
</div>
@endsection