@extends('admin.layouts.layout')
@section('content')
    <h1 class="heading">Update Question Page</h1>
    <form class="question-form" action="{{ route('admin.questions.update', $question->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        {{-- <input type="checkbox" id="subject_id" name="subject_id" checked value="{{ $subject_id }}" style="display:none;"> --}}

        <div class="bg-gray-100 w-75 m-auto p-5 rounded">
                <div class="form-group mb-4">
                    <label for="question_name" class="form-label text-lg">Question</label>
                    <input type="text" class="form-control rounded" name="question_name" id="question_name" value="{{ $question->question }}" required>
                </div>
                <div class="form-group mb-4">
                    <label for="choices" class="form-label text-lg">Choices</label>
                    <table><tr><td><input type="text" class="form-control rounded mb-2" name="choices[]" id="choices" value="{{ $question->choices[0] }}" required></td></tr></table>
                    <table id="dynamic">
                        @foreach($question->choices as $choice)
                        @if(!($loop->first))
                            <tr><td><input type="text" class="form-control rounded mb-2" name="choices[]" id="choices" value="{{ $choice }}" required></td></tr>
                        @endif
                    @endforeach
                    </table>
                    <div class="mt-2">
                        <div id="add-btn" class="btn bg-primary text-white">Add</div>
                        <div id="delete" class="btn bg-danger text-white">Delete</div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="correct_option" class="form-label text-lg">Correct Option</label>
                    <input type="text" class="form-control rounded" name="correct_option" value="{{ $question->correct_option }}" required>
                    </div>
                <div class="form-group mt-4">
                    <button class="btn bg-submit text-white">Update</button>
                </div>
        </div>
    </form>

    <script>
        document.getElementById("add-btn").onclick = function () {
             document.getElementById("dynamic").insertRow().innerHTML = "<input type=\"text\" class=\"form-control rounded mb-2\" name=\"choices[]\" placeholder=\"Enter a choice\" name=\"choices[]\" required>";
             document.getElementById("delete").innerHTML = "Delete"; 
         };
 
         var rowCount = document.getElementById("dynamic").rows.length;
         document.getElementById("delete").onclick = function () {
             document.getElementById("dynamic").deleteRow(-1);
         }
     </script>

@endsection