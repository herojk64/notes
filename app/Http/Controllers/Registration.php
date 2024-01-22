<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class Registration extends Controller
{
    public function index(){
        return view('registration.index');
    }

    public function store(){

        $attributes = request()->validate([
            'name'=>['required','max:255'],
            'username'=>['required','max:255',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'profile'=>['image'],
            'password'=>['required','min:7'],
        ]);

        $name = request()->file('profile')?->store('profile');

        if($name){
            $attributes['profile'] = $name;
        }

        User::create($attributes);

        return redirect('/login')->with("success","Your account has been created");
    }
}
