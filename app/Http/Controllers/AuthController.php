<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function store(){

        //TODO: login logic here
        $attribute = request()->validate([
           "user" => ['required'],
            'password' => ['required'],
        ]);

        $user = $this->checkUserExists($attribute['user']);
        if($user && Hash::check($attribute['password'],$user->password)){
            auth()->login($user);
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'user'=>"Invalid Username or Password",
            'password'=>"Invalid Username or Password"
        ]);
    }

    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success',"You have been logged out");
    }

    public function checkUserExists($user){
        $user = User::query()->where('username',$user)->orWhere("email",$user)->first();
        return $user ?? [];
    }

}
