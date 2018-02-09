<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('dashboard');
});

//LOGOUT
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
//

//LOGIN
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::post('/login','UserController@login');
//

//REGISTER
Route::get('/register', function(){

    if (Auth::check()){
        return redirect('/dashboard');
    }
    return view('register');
})->name('register');

Route::post('/register','UserController@register');
//
//

Route::middleware(['auth'])->group(function(){
    Route::get('/user', function(){
        return view('user');
    });
    Route::get('/admin', function(){
            return view('admin');
        });

    Route::get('/admin', function(){
            $role = Auth::user()->role;
            if($role != 'admin'){
                return 'you are not an admin';
            }
            return view('admin.index');
    });
    
    //ROUTE LOMBA
    Route::get('lomba/{id}/edit', 'LombaController@edit');
    Route::post('lomba/{id}/edit', 'LombaController@update');
    Route::get('lomba/{id}/delete', 'LombaController@delete');
    Route::get('lomba/{id}/confirmdelete', 'LombaController@confirmdelete');
    Route::get('lomba', 'LombaController@index');
    Route::get('lomba/add','LombaController@add');
    Route::post('/lomba', 'LombaController@create');

});



Route::get('lomba/{id}', 'LombaController@detail');



















