<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', [UserController::class, 'show']);


Route::get('/users/{user}', function (User $user) {
    return view('index',[

        'users'=>$user
        
    ]);

});


Route::get('/users', function () {
    dd(request());
    return view('index',[

        'users'=>User::all()
        
    ]);

});

Route::get('/editUser', function () {

    return view('editUser');
});

  Route::get('/', function () {
     return view('welcome');
 });

Route::get('/register', function () {
    return view('register');
});

Route::get('/dd', function () {
    
    return view('index');
    //dd(auth()->user());
});




Route::post('/newuser', [UserController::class, 'store']);

// Route::post('/newuser', function( Request $request){
//     dd($request);
// });

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']); 
