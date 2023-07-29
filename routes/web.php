<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\learnController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about4444444444',function(){
//     return view('about');
// })->name('about.us');

Route::get('/contact',function(){
    return view('contact');
})->name('contact.us');

Route::get('/about',[FirstController::class,'index'])->name('about.us');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

// country middleware use here


Route::get('/country',[FirstController::class,'country'])->name('country')->middleware('country');
// Route::get('/country',function(){
//     return view('country');
// })->middleware('country');

// invoable controller use here
Route::get('/test',learnController::class);

// csrf token from submit

Route::post('/student/store',[FirstController::class,'studentStore'])->name('student.store');

// Route::post('/server', [FirstController::class,'index']);




// Route::view('/contact','contact');













Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
