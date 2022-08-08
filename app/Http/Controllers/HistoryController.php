<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Subject;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index($user_id) {
        $histories = History::where('user_id', $user_id)->get();

        return view('histories.index', ['histories' => $histories]);
    }
    
    public function store($subject_id, $user_id) {
        $questions = json_decode(request('questions'));
        $selected_choices = [];
        $correct_options = [];
        
        $i = 0;
        $score = 0;
        foreach($questions as $question) {
            $selected_choices[$i] = request('selected_choice'.$question->id);
            $correct_options[$i] = $question->correct_option;

            if ($selected_choices[$i] == $correct_options[$i]) {
                $score++;
            }
            $i++;
        }

        $history = new History();
        $history->user_id = $user_id;
        $subject = Subject::findOrFail($subject_id);

        $history->subject = $subject->name;
        $history->score = $score;

        $history->save();

        return redirect('/subjects');
    }
}
