<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/exam-bpcs',[HomeController::class,'exam'])->name('bpsc');
Route::get('/exam-bba',[HomeController::class,'bba'])->name('bba');
Route::get('/exam-bca',[HomeController::class,'bca'])->name('bca');
Route::get('/exam-biology',[HomeController::class,'biology'])->name('biology');
Route::get('/exam-bsc',[HomeController::class,'bsc'])->name('bsc');
Route::get('/exam-chemistery',[HomeController::class,'chemistery'])->name('chemistery');
Route::get('/exam-commerece',[HomeController::class,'commerce'])->name('commerce');
Route::get('/exam-math',[HomeController::class,'math'])->name('math');
Route::get('/exam-physics',[HomeController::class,'physics'])->name('physics');

// About pages route
Route::get('/about',[HomeController::class,'about'])->name('about');

// course pages route
Route::get('/course',[HomeController::class,'course'])->name('course');

// Pattern pages route
Route::get('/pattern',[HomeController::class,'pattern'])->name('pattern');

// Pricing pages route
Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');

// syllabus pages route
Route::get('/syllabus',[HomeController::class,'syllabus'])->name('syllabus');

// contact pages route
Route::get('/contact',[HomeController::class,'contact'])->name('contact');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
