<?php

use App\Http\Controllers\AddRecipeController;
use App\Http\Controllers\BuyListController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\FruitsandVegetablesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CreateIngredientController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
//Ruta del login del usuario
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//name-> lo que pasamos por route en los href.

//Ruta para ir al calendario
Route::get('/calendario', [CalendarioController::class, 'calendario'])->name('calendar');
Route::get('/seleccionar-estacion', [CalendarioController::class, 'getSeason'])->name('getSeason');

//Ruta de la tempoorada
Route::get('/temporada/{seasonName}', [SeasonController::class, 'season'])
    ->name('season');

//Ruta que nos enseña la ficha CAMBIAR FICHA A PLATECONTR
Route::get('/ficha/{id}', [FichaController::class, 'datosFicha'])->name('plate');

//Ruta de receta aleatoria
Route::get('/aleatorio', [RandomController::class, 'randomRecipe'])->name('random');

//Ruta de la foto de los productos de temporada
Route::get('/foto', [FruitsandVegetablesController::class, 'takeStatus'])->name('takeStatus');

//Ruta para agregar recetas
Route::get('/crear', [AddRecipeController::class, 'createRecipe'])->name('addRecipe');
Route::post('/crear-guardar', [AddRecipeController::class, 'saveRecipe'])->name('save');

//Ruta para agregar ingredientes
Route::get('/crear-ingrediente',[AddRecipeController::class,'createIngredient'])->name('createIngredient');
Route::post('/guardar-ingrediente',[AddRecipeController::class,'saveIngredient'])->name('saveIngredient');
Route::post('/mostrar-ingrediente-guardado',[AddRecipeController::class,'successIngredient'])->name('successIngredient');

//Rutas carro de la compra
Route::get('/lista-compra', [CartController::class, 'getAllList'])->name('getAllList');
Route::post('/lista-compra/agregar', [CartController::class, 'addIngredient'])->name('addIngredient');
Route::get('/lista-vacia',[CartController::class,'seeRemoveList'])->name('seeRemoveList');
