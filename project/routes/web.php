<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/home', [PageController::class,'index'])->name('home');
Route::get('/about', [PageController::class,'about']);
Route::get('/courses', [PageController::class,'courses']);
Route::get('/course', [PageController::class,'course']);
Route::get('/events', [PageController::class,'events']);
Route::get('/blog', [PageController::class,'blog']);
Route::get('/contact', [PageController::class,'contact']);
//pages
// Route::get('/teachers', [PageController::class,'teachers']);
// Route::get('/teacher', [PageController::class,'teacher']);
// Route::get('/notices', [PageController::class,'notices']);
// Route::get('/notice', [PageController::class,'notice']);
// Route::get('/research', [PageController::class,'research']);
// Route::get('/scolarship', [PageController::class,'scolarship']);
// Route::get('/coursesingle', [PageController::class,'coursesingle']);
// Route::get('/eventsingle', [PageController::class,'eventsingle']);
// Route::get('/blogsingle', [PageController::class,'blogsingle']);


Route::get('/blocks', [PageController::class,'blocks']);
Route::get('/indexadmin', [PageController::class,'indexadmin']);
Route::get('/cards', [PageController::class,'cards']);
Route::get('/carousels', [PageController::class,'carousels']);
Route::get('/forms', [PageController::class,'forms']);
Route::get('/viewemp', [PageController::class,'viewemp']);
Route::get('/people', [PageController::class,'people']);
Route::get('/pricing', [PageController::class,'pricing']);

