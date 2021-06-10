<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\NewLoginController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginTopController;
use App\Http\Controllers\TalkController;
use App\Http\Controllers\ContactLoginController;
use App\Http\Controllers\HokubuController;

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

#DefaultPage
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



#TopPage
Route::get('/top', [TopController::class,'index']);


#IntroController(canpany & root)
Route::get('/introR', [IntroController::class,'root']);
Route::get('/introC', [IntroController::class,'company']);


#ContactController
Route::get('/contact', [ContactController::class,'contactus']);
Route::post('/contact', [ContactController::class,'post']);


#ソーシャルログイン
Route::prefix('login/{provider}')->where(['provider' => '(line|github)'])->group(function(){

    Route::get('/', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('social_login.redirect');
    Route::get('/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('social_login.callback');

});

/**ログイン後
 * 
 */
#トップ画面
Route::get('/Ltop', [LoginTopController::class,'index']);

#部屋を選択する画面
Route::get('/room_choose', [TalkController::class,'index']);

#各部屋トーク画面
Route::get('/hokubu', [TalkController::class,'hokubu']);
Route::get('/tohoku', [TalkController::class,'tohoku']);
Route::get('/tobu', [TalkController::class,'tobu']);
Route::get('/tyubu', [TalkController::class,'tyubu']);
Route::get('/seibu', [TalkController::class,'seibu']);


#トークアクション
Route::resource('/hokubu', HokubuController::class);



#ContactController
Route::get('/contact_login', [ContactLoginController::class,'contactus']);
Route::post('/contact_login', [ContactLoginController::class,'post']);
