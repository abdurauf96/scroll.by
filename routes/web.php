<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/agency', [MainController::class, 'agency'])->name('agency');
Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');
Route::get('/vacancy', [MainController::class, 'vacancy'])->name('vacancy');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [MainController::class, 'blogDetail'])->name('blogDetail');
Route::get('/portfolio/{slug?}', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [MainController::class, 'services'])->name('services');

Route::get('/service/razrabotka-sajtov', [ServiceController::class, 'siteDevelopment'])->name('siteDevelopment');
Route::get('/service/seo-prodvizhenie', [ServiceController::class, 'seo'])->name('seo');
Route::get('/service/kontekstnaya-reklama', [ServiceController::class, 'reklama'])->name('reklama');
Route::get('/service/prodvizhenie-v-socialьnyh-setyah', [ServiceController::class, 'smm'])->name('smm');
Route::get('/service/firmennyj-stilь-i-dizajn', [ServiceController::class, 'design'])->name('design');
Route::get('/service/tehnicheskaya-podderzhka', [ServiceController::class, 'support'])->name('support');
Route::get('/service/sozdanie-kontenta', [ServiceController::class, 'creatingContent'])->name('creatingContent');
Route::get('/service/zashita-brenda-v-seti-internet', [ServiceController::class, 'protectBrand'])->name('protectBrand');
Route::get('/service/vnedrenie-crm-«bitriks24»', [ServiceController::class, 'bitriks'])->name('bitriks');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
