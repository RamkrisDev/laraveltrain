<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    //
    // public function index()
    // {
    //     echo 'hello from controller';
    // }
    public function index($data)
    {
        // echo $data."<br>";
        // echo 'hello from controller';
        return ['name'=>'ram','age'=>34];
    }
}
