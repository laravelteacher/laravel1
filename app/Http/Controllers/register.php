<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registerform;

class register extends Controller
{
    //

    

public function createregister(){

    return view('registeruser');
}


public function saveregister(Request $request){
       
    $user = new registerform;   // the name of table
    $user->fname = $request->fname;
    $user->lname = $request->lname;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->notes = $request->notes;
    $user->save(); 
    return redirect()->back()->with('success', 'user has added successfully');

}


}
