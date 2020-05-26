<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewSignupForm(){
        return view('user.signup');
    }

    public function signup(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|min:5'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('course.index');
    }

    public function viewSigninForm()
    {
        return view('user.signin');
    }

    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('course.index');
        }
        return redirect()->back();
    }

    public function showProfile(){
        return view('user.profile');
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
