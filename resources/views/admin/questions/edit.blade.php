@extends('admin.layouts.layout')
@section('content')
    <h1>Update Question Page</h1>
    <form class="question-form" action="{{ route('admin.questions.update', $question->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        {{-- <input type="checkbox" id="subject_id" name="subject_id" checked value="{{ $subject_id }}" style="display:none;"> --}}

        <label for="question_name">Question</label>
        <input type="text" name="question_name" id="question_name" value="{{ $question->question }}" required>
        <label for="choices" id="add-btn">Add Choices</label><br>
        <tr><td><input type="text" name="choices[]" id="choices" value="{{ $question->choices[0] }}" required></td></tr>
        <table id="dynamic" cellspacing=0>
            @foreach($question->choices as $choice)
            @if(!($loop->first))
                <tr><td><input type="text" name="choices[]" id="choices" value="{{ $choice }}" required></td></tr>
            @endif
        @endforeach
        </table>
        <p id="delete">Delete</p>

        
        <label for="correct_option">Correct Option</label>
        <input type="text" name="correct_option" value="{{ $question->correct_option }}" required>
        <button>Submit</button>
    </form>

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

@endsection