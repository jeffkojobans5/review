<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
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

Route::group(['middleware' => ['auth']], function () { 

// admin
Route::get('/dashboard' , [ReviewController::class , 'DashJsLounge']);
// Route::get('/reviews/PearlsDeli' , [ReviewController::class , 'reviewsPearlsDeli']);
// Route::get('/reviews/Linaks' , [ReviewController::class , 'reviewsLinaks']);
Route::get('/reviews/JsLounge' , [ReviewController::class , 'reviewsJsLounge']);

});

// post
// Route::post('/thank__you', [ReviewController::class , 'PearlsDeli'])->name('thank_you');
// Route::post('/thank_you', [ReviewController::class , 'Linaks'])->name('thank__you');
Route::post('/thank___you', [ReviewController::class , 'JsLounge'])->name('thank___you');


// get
// Route::get('/PearlsDeli' , function() {
//     return view('shops.PearlsDeli.PearlsDeli');
// });

// Route::get('/Linaks' , function() {
//     return view('shops.Linaks.linaks');
// });

Route::get('/JsLounge' , function() {
    return view('shops.JsLounge.JsLounge');
});

Route::get('/' , function() {
    return view('shops.JsLounge.JsLounge');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
