<?php
use App\Http\Controllers\CourierController;
use App\Http\Controllers\SearchController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/percel_checking', function () {
    return view('percel_checking');
})->name('percel_checking');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('couriers', CourierController::class)
->only(['index', 'store','create', 'show', 'edit', 'update', 'destroy'])

->middleware(['auth', 'verified']);


Route::get(
    '/couriers/search',
    [CourierController::class, 'search']
)->name('couriers.search')->middleware(['auth', 'verified']);





Route::get('/couriers/searchresult',[CourierController::class, 'search'] 
    
)->name('couriers.search')->middleware(['auth', 'verified']);



Route::get(
    '/search',
    [SearchController::class, 'search']
)->name('search');

Route::get('/searchresult',[SearchController::class, 'search'] 
    
)->name('searchresult');

  
require __DIR__.'/auth.php';
