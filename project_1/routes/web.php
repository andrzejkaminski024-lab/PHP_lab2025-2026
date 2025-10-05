<?php

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

Route::get('merito', function () {
    return view('merito');
})->name('merito');

Route::redirect('/wsb', '/merito');

Route::get('merito_data/{test?}', function ($test=null) {
    //return ['name' => 'Jan', 'surname' => 'Kowalski'];
    return view('merito_data', ['name' => 'Jan', 'surname' => 'Kowalski']);
})->name('Główna strona Merito z danymi');


Route::get('pages/{x}', function ($x) {
    $pages = ['home' => 'Strona domowa', 'about' => 'Strona Merito', 'contact' => 'Strona kontaktowa'];
    return $pages[$x];
});




