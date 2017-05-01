<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function index()
//    {
//        return view('register');
//    }

    public function create()
    {
        return view('register');
    }

    public function store()
    {
        //validate

        $this->validate(request(),[
            'name' => 'required|max:12',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        //create

        $user = User::create(request(['name','email','password']));
//        $student = Student::create(request(['name','email','password','first_name','last_name','faculty','birth_date','gender','address','phone']));


        auth()->login($user);

        // return
//        dd($user);
        return redirect()->home();
    }
}
