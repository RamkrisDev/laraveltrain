<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userformcontroller extends Controller
{
    //
    public function getdata(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10',
            'password'=>"required |min:5"
        ]);
        return $req->input();
    }
}
