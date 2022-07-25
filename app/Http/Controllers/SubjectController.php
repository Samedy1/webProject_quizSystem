<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();

        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function create() {

        return view('subjects.create');
    }

    public function store(Request $request) {
        if ($request->hasFile('subject_img')) {
            $subject = new Subject();
            $destination_path = "public/img/subjects";
            $image = $request->file('subject_img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('subject_img')->storeAs($destination_path, $image_name);
            $subject->img = $image_name;
        } 
        

        $subject->name = request('subject_name');

        $subject->save();
        return redirect('/subjects');
    }
}
