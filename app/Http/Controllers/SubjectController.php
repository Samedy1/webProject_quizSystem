<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Question;
use Illuminate\Support\Facades\File as FacadesFile;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function admin_index() {
        $subjects = Subject::all();
        return view('admin.subjects.index', ['subjects' => $subjects]);
    }

    public function create() {
        return view('admin.subjects.create');
    }

    public function store(Request $request) {
        $subject = new Subject();
        
        if ($request->hasFile('subject_img')) {
            $subject = new Subject();
            $destination_path = public_path()."/img/subjects";
            // error_log(public_path());
            $image = $request->file('subject_img');
            $image_name = $image->getClientOriginalName();
            // $path = $request->file('subject_img')->storeAs($destination_path, $image_name);
            $image->move($destination_path, $image_name);
            $subject->img = $image_name;
        } 

        $subject->name = request('subject_name');
        $subject->description = request('subject_desc');

        $subject->save();
        return redirect('/admin/subjects');
    }

    public function show($subject_id) {
        $subject = Subject::findOrFail($subject_id);
        $questions = Question::where('subject_id', $subject_id)->get();
        
        return view('admin.subjects.show', ['subject' => $subject, 'questions' => $questions]);
    }

    public function destroy($subject_id) {
        $subject = Subject::FindOrFail($subject_id);

        $image_path = public_path()."/img/subjects/".$subject->img;
        if (FacadesFile::exists($image_path)) {
            FacadesFile::delete($image_path);
        }

        $questions = Question::where('subject_id', $subject_id)->get();

        foreach($questions as $question) {
            $question->delete();
        }

        $subject->delete();
        return redirect('admin/subjects');
    }

    public function edit($subject_id) {
        $subject = Subject::findOrFail($subject_id);
        return view('admin.subjects.edit', ['subject' => $subject]);
    }

    public function update($subject_id) {
        $subject = Subject::findOrFail($subject_id);

        $subject->name = request('subject_name');
        $subject->description = request('subject_desc');

        $subject->save();
        return redirect('admin/subjects');
    }
}
