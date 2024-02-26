<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

// Primer ejemplo 

// Route::get('/bienvenido', function () {
//     echo "<h1>Hola mundo</h1>";
//     return view('welcome');

// });

// Segundo ejemplo 

// Route::get('/', function () {
//     return "raiz";

// });


// Tercer ejemplo 

// Route::get('/custom', function () {

//     $msj="Mensaje desde el servidor *-*";

//     return view('custom', ['msj' => $msj]);
// });


// cuarto ejemplo: Reto crear una view llamada contacto 

// Route::get('/contacto', function () {
//     return view('contacto');
//     // return view('contacto');

// }) -> name('contacto');

// Route::get('/first', function () {
//     return view('first');

// });

// Quinto ejemplo 

// Route::get('/', [TestController::class, 'test']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
