<?php

use App\Http\Controllers\newsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', [newsController::class, 'index']);
Route::get('/fashion', [newsController::class, 'catf'])->name('fashion');
Route::get('/business', [newsController::class, 'catb'])->name('business');
Route::get('/politics', [newsController::class, 'catp'])->name('politics');
Route::get('/entertainment', [newsController::class, 'cate'])->name('entertainment');
Route::get('/tech', [newsController::class, 'catt'])->name('tech');
Route::get('/sports', [newsController::class, 'cats'])->name('sports');
Route::get('/education', [newsController::class, 'cated'])->name('education');
Route::get('/lifestyle', [newsController::class, 'catl'])->name('lifestyle');
Route::get('/health', [newsController::class, 'cath'])->name('health');
Route::get('/automobile', [newsController::class, 'cataut'])->name('automobile');
Route::get('/App', [newsController::class, 'catapp'])->name('app');
Route::get('/Food', [newsController::class, 'catfood'])->name('food');
Route::get('/Game', [newsController::class, 'catg'])->name('game');
Route::get('/Internet', [newsController::class, 'catin'])->name('internet');
Route::get('/Phones', [newsController::class, 'catph'])->name('phones');
Route::get('/Development', [newsController::class, 'catdev'])->name('development');
Route::get('/Gadgets', [newsController::class, 'catgd'])->name('gadgets');
Route::get('/USA', [newsController::class, 'catusa'])->name('USA');
Route::get('/USA/Entertainment', [newsController::class, 'catusae'])->name('USAEntertainment');
Route::get('/USA/Politics', [newsController::class, 'catusap'])->name('USAPolitics');
Route::get('/USA/Sports', [newsController::class, 'catusas'])->name('USASports');
Route::get('/USA/Tech', [newsController::class, 'catusat'])->name('USATech');
Route::get('/Australia', [newsController::class, 'cataus'])->name('Australia');
Route::get('/Australia/Politics', [newsController::class, 'cataustraliap'])->name('AustraliaPolitics');
Route::get('/Australia/Sports', [newsController::class, 'cataustralias'])->name('AustraliaSports');
Route::get('/Australia/Tech', [newsController::class, 'cataustraliat'])->name('AustraliaTech');
Route::get('/Australia/Entertainment', [newsController::class, 'cataustraliae'])->name('AustraliaEntertainment');
Route::get('/Canada', [newsController::class, 'catcad'])->name('Canada');
Route::get('/Canada/Politics', [newsController::class, 'catcanadap'])->name('CanadaPolitics');
Route::get('/Canada/Sports', [newsController::class, 'catcanadas'])->name('CanadaSports');
Route::get('/Canada/Tech', [newsController::class, 'catcanadat'])->name('CanadaTech');
Route::get('/Canada/Entertainment', [newsController::class, 'catcanadae'])->name('CanadaEntertainment');
Route::get('/Europe', [newsController::class, 'cateur'])->name('Europe');
Route::get('/Europe/Politics', [newsController::class, 'cateuropep'])->name('EuropePolitics');
Route::get('/Europe/Sports', [newsController::class, 'cateuropes'])->name('EuropeSports');
Route::get('/Europe/Tech', [newsController::class, 'cateuropet'])->name('EuropeTech');
Route::get('/Europe/Entertainment', [newsController::class, 'cateuropee'])->name('EuropeEntertainment');
Route::get('/Africa', [newsController::class, 'catafr'])->name('Africa');
Route::get('/Africa/Politics', [newsController::class, 'catafricap'])->name('AfricaPolitics');
Route::get('/Africa/Sports', [newsController::class, 'catafricas'])->name('AfricaSports');
Route::get('/Africa/Tech', [newsController::class, 'catafricat'])->name('AfricaTech');
Route::get('/Africa/Entertainment', [newsController::class, 'catafricae'])->name('AfricaEntertainment');
Route::get('/India', [newsController::class, 'catind'])->name('India');
Route::get('/India/Politics', [newsController::class, 'catindiap'])->name('IndiaPolitics');
Route::get('/India/Sports', [newsController::class, 'catindias'])->name('IndiaSports');
Route::get('/India/Tech', [newsController::class, 'catindiat'])->name('IndiaTech');
Route::get('/India/Entertainment', [newsController::class, 'catindiae'])->name('IndiaEntertainment');
Route::get('/China', [newsController::class, 'catch'])->name('China');
Route::get('/China/Politics', [newsController::class, 'catchinap'])->name('ChinaPolitics');
Route::get('/China/Sports', [newsController::class, 'catchinas'])->name('ChinaSports');
Route::get('/China/Tech', [newsController::class, 'catchinat'])->name('ChinaTech');
Route::get('/China/Entertainment', [newsController::class, 'catchinae'])->name('ChinaEntertainment');
Route::get('/UK', [newsController::class, 'catuk'])->name('UK');
Route::get('/UK/Politics', [newsController::class, 'catukp'])->name('UKPolitics');
Route::get('/UK/Sports', [newsController::class, 'catuks'])->name('UKSports');
Route::get('/UK/Tech', [newsController::class, 'catukt'])->name('UKTech');
Route::get('/UK/Entertainment', [newsController::class, 'catuke'])->name('UKEntertainment');
Route::get('/Crypto', [newsController::class, 'catcrypto'])->name('Crypto');
Route::get('/About-Us', [newsController::class, 'about'])->name('About');
Route::get('/Contact-Us', [newsController::class, 'contact'])->name('Contact');
Route::get('/Privacy-Policy', [newsController::class, 'policy'])->name('Privacy-Policy');
Route::get('/Privacy/Policy', [newsController::class, 'privacy'])->name('Privacy');
