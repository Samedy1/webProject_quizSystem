<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index($user_id) {
        $histories = History::where('user_id', $user_id)->get();

        return view('histories.index', ['histories' => $histories]);
    }

    public function show($user_id, $history_id) {
        $history = History::findOrFail($history_id);
        $questions = [];

        foreach ($history->questions as $question_id) {
            $question = Question::find($question_id);
            $questions[] = $question;
        }

        return view('histories.show', ['info' => [
                'history' => $history,
                'questions' => $questions
            ]
        ]);
    }
    
    public function store($subject_id, $user_id) {
        $questions = json_decode(request('questions'));
        $question_ids = [];
        $selected_choices = [];
        $correct_options = [];
        
        $i = 0;
        $score = 0;
        foreach($questions as $question) {
            $question_ids[$i] = $question->id;
            $selected_choices[$i] = request('selected_choice'.$question->id);
            $correct_options[$i] = $question->correct_option;

            if ($selected_choices[$i] == $correct_options[$i]) {
                $score++;
            }
            $i++;
        }

        $history = new History();
        $history->user_id = $user_id;

        $subject = Subject::findOrFail($subject_id); // find the subject name

        $history->subject = $subject->name;
        $history->score = $score;
        $history->questions = $question_ids;
        $history->selected_choices = $selected_choices;

        $history->save();

        return redirect("/histories/$user_id/show/$history->id");
    }
}
