<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            $destination_path = public_path()."/img/users";
            $image = $request->file('user_img');
            $image_name = $image->getClientOriginalName();
            $image->move($destination_path, $image_name);
            $user->user_img = $image_name;
        } 

        $user->save();
        return redirect("/settings/$user->id");
    }

    public function change_password() {
        return view('password.edit');
    }

    public function update_password($user_id) {
        $user = User::findOrFail($user_id);

        if (request('newpass') != request('confirmpass')) {
            error_log('no match');
            return redirect("/password/$user_id")->with('mssg', "Failed! The passwords don't match!");
        }

        $user->password =  Hash::make(request('newpass'));
        $user->save();

        return redirect("/password/$user_id")->with('mssg', 'Success');
    }
}
