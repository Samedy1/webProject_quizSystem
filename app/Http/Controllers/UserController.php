<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }

    public function edit($user_id) {
        $user = User::findOrFail($user_id);
        return view('settings.edit', ['user' => $user]);
    }

    public function update(Request $request, $user_id) {
        $user = User::findOrFail($user_id);

        $user->name = request('user_name');
        $user->email = request('user_email');
        
        if ($request->hasFile('user_img')) {

        } 

        $user->save();
        return redirect("/settings/$user->id");
    }
}
