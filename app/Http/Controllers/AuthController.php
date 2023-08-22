<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show() {
        return view('welcome');
    }

    public function login() {
        validator(request()->all(), [
            'login' =>['required'],
            'password' =>['required']
        ])->validate();

        $userObj = request()->only(['login', 'password']);
        $users = User::all();

        foreach($users as $user) {
            if($user->login === $userObj['login'] && $user->password === $userObj['password']) {
                auth()->loginUsingId($user->id);
                return redirect('dashboard');
            }
        }

        return redirect()->back()->withErrors(['login'=>'Please write correct login or password']);
    }

    public function logout() {
        auth()->logout();

        return redirect('/');
    }
}
