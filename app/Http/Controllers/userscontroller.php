<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    //
    public function loadview()
    {
      return view('users',['name'=>'ram']);
    }
}
