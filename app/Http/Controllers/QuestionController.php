<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index($subject_id) {
        $questions = Question::where('subject_id', $subject_id)->get();

        // return $questions;

        return view('questions.index', ['questions' => $questions]);
    }

    public function create($subject_id) {
        return view('admin.questions.create', ['subject_id' => $subject_id]);
    }

    public function store() {
        $question = new Question();
        
        $question->question = request('question_name');
        $question->choices = request('choices');
        $question->correct_option = request('correct_option');
        $question->subject_id = request('subject_id');

        $question->save();



        return redirect('/admin/subjects');
    }

    public function result() {
        $questions = json_decode(request('questions'));
        $selected_choices = [];
        $correct_options = [];
        
        foreach($questions as $question) {
            $selected_choices[] = request('selected_choice'.$question->id);
            $correct_options[] = $question->correct_option;
        }

        return view('questions.result', [
            'selected_choices' => $selected_choices,
            'correct_options' => $correct_options
        ]);
    }

    public function destroy($question_id) {
        $question = Question::FindOrFail($question_id);
        $question->delete();
        return redirect('admin/subjects');
    }
}
