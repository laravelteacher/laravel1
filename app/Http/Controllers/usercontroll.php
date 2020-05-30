<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroll extends Controller
{
    public function register(){

        return view('register');
    }

    public function saveuser(Request $request){

        $user = new createuser;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->notes = $request->notes;
        $user->save();
        return redirect()->back()->with('success', 'user has added successfully');

    }
}
