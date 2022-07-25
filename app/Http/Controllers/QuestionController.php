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
}
