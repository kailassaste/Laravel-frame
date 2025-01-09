<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home',function(){
//     return "hello laravel routes";
// });

// shortcut
Route::view('hello',"home");

Route::view('about',"home");
// Route::get('/', function () {
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

Route::get('user',[UserController::class,'getUser']);
Route::get('user',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);










 
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
