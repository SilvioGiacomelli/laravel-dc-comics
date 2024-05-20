<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ComicsController;
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

//Una route è un endpoint di un'applicazione, un URL che l'applicazione può gestire.

Route::get('/', [PageController::class, 'index'])->name('home'); //In questa route, il metodo get() accetta due parametri: il primo è l'URL, il secondo è un array associativo con il nome del controller e il metodo che gestirà la route. Il metodo name() assegna un nome alla route.

Route::get('/nuova-pagina', [PageController::class, 'nuovaPagina'])->name('nuovapagina');

Route::resource('comics', ComicsController::class);
