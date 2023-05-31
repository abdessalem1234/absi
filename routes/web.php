<?php


use App\Http\Controllers\NFCController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


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

Route::get('/acceuil', [NFCController::class, 'index'])->name('NFC.home');
//Route::get('/mes-cartes-nfc', [function (),'mes-cartes-nfc/mes-cartes-nfc'])->name('mes-cartes-nfc.home');

Route::get('/mes-cartes-nfc', [ClientController::class, 'index']);
Route::delete('/clients/{id}', 'App\Http\Controllers\ClientController@destroy')->name('clients.destroy');
Route::put('/clients/{id}', 'App\Http\Controllers\ClientController@update')->name('clients.update');





