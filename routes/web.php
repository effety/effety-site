<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmazonProductController;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\HomeController;





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

Route::post('set-locale', function (Illuminate\Http\Request $request) {
    $locale = $request->input('locale');
    Session::put('locale', $locale);
    return redirect()->back();
})->name('setLocale');


 Route::get('/', [HomeController::class, 'cryptoHome'])->name('home');
 
Route::get('/amazon-products', [AmazonProductController::class, 'index']);