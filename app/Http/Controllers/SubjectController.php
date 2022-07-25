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
}
