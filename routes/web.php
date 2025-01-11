<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formController;
use App\Http\Controllers\HandlingController;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\AgeCheck;
use App\Http\Controllers\DBcontroller;


//  Route::get('/', function () {
//     return view('welcome');
//  });

// Route::get('home',function(){
//     return "hello laravel routes";
// });

// shortcut
// Route::view('hello',"home");

// Route::view('about',"home");
// Route::get('home', function () {
//        return view('home');
//  });

// name route

// Route::get('home/introduction', function () {
//        return view('home');
//  })->name('about');
//  Route::get('home/about', function () {
//     return view('home');
// })->name('about');
// Route::get('home/information', function () {
//     return view('home');
// })->name('about');


// // group route
// Route::prefix('home')->group(function (){
//     Route::get('introduction',function (){
//         return view("home");
//     })->name('about');
//     Route::get('about',function (){
//         return view("home");
//     })->name('about');
//     Route::get('information',function (){
//         return view("home");
//     })->name('about');

// });

// Route::get('user',[UserController::class,'getUser']);
// Route::get('user',[UserController::class,'aboutUser']);
// Route::get('user/{name}',[UserController::class,'getUserName']);
// Route::get('/home2',[UserController::class,'homeUser']);

// Route::get('user-home',[UserController::class,'home']);

//  for user request
// Route::view('user-form','user-form');
// Route::post('adduser', [formController::class, 'addUser'])->name('adduser');


// Route::view('new-user','handling-form');
// Route::post('adduser',[HandlingController::class, 'newUser']);


Route::view('user-form','user-form');
Route::post('adduser', [UserController::class, 'addUser'])->name('adduser');

//middlewaregroup
//Route::view('newhome','home2')->middleware('check');
Route::view('about','about');

Route::middleware('check')->group(function(){
    Route::view('about','about');
    Route::view('contact','home2');
    Route::view('newhome','home2');
    Route::view('list','home2');
});

//assiging middleware to route
Route::view('newhome','home2')->middleware([AgeCheck::class,CountryCheck::class]);

Route::get('users',[DBcontroller::class,'users']);







 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
?>
