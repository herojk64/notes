<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Subscription;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('index');
})->name('home');

Route::get('/notes',[NoteController::class,"index"])->name('viewNotes')->middleware('auth');
Route::get('/notes/{slug}',[NoteController::class,"show"])->name('showNotes')->middleware('auth');
Route::get('/note/add',[NoteController::class,"add"])->name('addNotes')->middleware('auth');
Route::post('/note/add',[NoteController::class,"store"])->name('storeAddNotes')->middleware('auth');

Route::get('/note/edit/{slug}',[NoteController::class,"edit"])->name('editNotes')->middleware('auth');
Route::put('/note/update',[NoteController::class,"storeEdit"])->name('storeEditNotes')->middleware('auth');
Route::delete('/note/delete/{slug}',[NoteController::class,"remove"])->name('deleteNotes')->middleware('auth');

Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class,'store'])->name('loginStore')->middleware('guest');
Route::post('/logout',[AuthController::class,'destroy'])->name('logout')->middleware('auth');

Route::get('/signup',[Registration::class,'index'])->name('signup')->middleware('guest');
Route::post('/signup',[Registration::class,'store'])->name('register')->middleware('guest');

Route::post("/subscribe",Subscription::class)->name('subscription');
