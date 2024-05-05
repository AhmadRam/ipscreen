<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/services', [Controller::class, 'services'])->name('services');

Route::get('/about_us', [Controller::class, 'about_us'])->name('about_us');

Route::get('/contact_us', [Controller::class, 'contact_us'])->name('contact_us');

Route::get('/privacy_policy', [Controller::class, 'privacy_policy'])->name('privacy_policy');

Route::get('/category/{slug}', [Controller::class, 'category'])->name('category');

Route::get('/products', [Controller::class, 'products'])->name('products');

Route::get('/product/{url_key}', [Controller::class, 'product'])->name('product');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
