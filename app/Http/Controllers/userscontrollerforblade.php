<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontrollerforblade extends Controller
{
    //
    public function viewload()
    {
        # code...
        return view('forblade',['users'=>['ram','kris','muthu']],['name'=>'muthu']);
    }
}
