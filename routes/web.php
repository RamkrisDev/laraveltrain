<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{name}', function ($name) {
//    echo '<h1>'.$name.'</h1>';
//     return view('welcome',['name'=>$name]); 
//     // return ['name'=>'hello'];
// });


//redirect

Route::get('/', function () {
    
    //  return view('welcome'); 
    return redirect('about');    
 });

 //route

 Route::get('/home', function () {
    
    
    return view('welcome');    
 });

Route::get('/hello', function () {
    return view('hello');
    
});

// Route::get('/about', function () {
//     return view('about');
   
// });

Route::view('about','about');

Route::view('xyz','contact');


//controller potion


use App\Http\Controllers\user;

//old

// Route::get('user','User@index');

// Route::get('user',[user::class,'index']);
Route::get('user/{data}',[user::class,'index']);




//views

use App\Http\Controllers\userscontroller;
// Route::get('/users/{name}',function($nm){
//     return view('users',['name'=>$nm]);
// });

Route::get('users',[userscontroller::class,'loadview']);

use App\Http\Controllers\userscontrollerforblade;
//blade
Route::get('forblade',[userscontrollerforblade::class,'viewload']);


