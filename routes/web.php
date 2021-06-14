<?php

use App\Http\Controllers\OperationController;
use Illuminate\Support\Facades\Route;

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

// Route::group(['domain' => 'help.localhost'], function () {
//     Route::get('/', function () {
//         return view('dashboard');
//     });
// });

Route::get('/', function () {
    return view('welcome.home');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $responsables = App\Models\Responsable::with('user')->get();
    return view('dashboard', [
        'responsables' => $responsables
    ]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('operations')->group(function () {
    Route::get('/', [OperationController::class, 'list'])->middleware(['roles:notaire,responsable,citoyen'])->name('operations.list');
    Route::get('/inscrire', [OperationController::class, 'inscrireView'])->middleware('roles:notaire')->name('operations.inscrire');
    Route::get('/{operation}', [OperationController::class, 'show'])->middleware(['roles:notaire,responsable,citoyen'])->name('operations.show');
});
