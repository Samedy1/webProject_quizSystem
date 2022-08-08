<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index($subject_id) {
        $questions = Question::where('subject_id', $subject_id)->get();

        return view('questions.index', ['info' => [
            'questions' => $questions, 
            'subject_id' => $subject_id]
        ]);
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

        return redirect("/admin/subjects/show/$question->subject_id");
    }

    public function destroy($question_id) {
        $question = Question::FindOrFail($question_id);
        $question->delete();
        return redirect("admin/subjects/show/$question->subject_id");
    }

    public function edit($question_id) {
        $question = Question::findOrFail($question_id);
        return view('admin.questions.edit', ['question' => $question]);
    }

    public function update($question_id) {
        $question = Question::findOrFail($question_id);

        $question->question = request('question_name');
        $question->choices = request('choices');
        $question->correct_option = request('correct_option');

        $question->save();
        return redirect("admin/subjects/show/$question->subject_id");
    }
}
