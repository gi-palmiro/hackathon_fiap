<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Models\TechNews;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechNewsController;


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


//Route::get('/test-db', function () {
//    try {
//        DB::connection()->getPdo();
//        return 'Conexão com o banco de dados está OK!';
//    } catch (\Exception $e) {
//        return 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
//    }
//});
//
//Route::get('/test-minimal', function () {
//    return 'Rota mínima funcionando!';
//});
//
//Route::view('/test-footer', 'components.footer');
//
//// 🌐 Rotas Públicas
//Route::get('/', [TechNewsController::class, 'index'])->name('home');
//Route::get('news/{id}', [TechNewsController::class, 'show'])->name('news.show');
//Route::post('subscribe', [TechNewsController::class, 'subscribe'])->name('subscribe');
//
//// 👥 Rotas de Autenticação (Apenas para Visitantes)
//Route::middleware('guest')->group(function () {
//    Route::get('login', Login::class)->name('login');
//    Route::get('register', Register::class)->name('register');
//    Route::get('password/reset', Email::class)->name('password.request');
//    Route::get('password/reset/{token}', Reset::class)->name('password.reset');
//});
//
//// 🔐 Rotas Protegidas (Apenas para Usuários Autenticados)
//Route::middleware('auth')->group(function () {
//    Route::post('logout', LogoutController::class)->name('logout');
//    Route::get('email/verify', Verify::class)->middleware('throttle:6,1')->name('verification.notice');
//    Route::get('password/confirm', Confirm::class)->name('password.confirm');
//    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
//        ->middleware('signed')
//        ->name('verification.verify');
//});

//Route::middleware('guest')->group(function () {
//    Route::get('login', Login::class)
//        ->name('login');
//
//    Route::get('register', Register::class)
//        ->name('register');
//});
//
//Route::get('password/reset', Email::class)
//    ->name('password.request');
//
//Route::get('password/reset/{token}', Reset::class)
//    ->name('password.reset');
//
//Route::middleware('auth')->group(function () {
//    Route::get('email/verify', Verify::class)
//        ->middleware('throttle:6,1')
//        ->name('verification.notice');
//
//    Route::get('password/confirm', Confirm::class)
//        ->name('password.confirm');
//});
//
//Route::middleware('auth')->group(function () {
//    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
//        ->middleware('signed')
//        ->name('verification.verify');
//
//    Route::post('logout', LogoutController::class)
//        ->name('logout');
//});
//Route::get('/test-db', function () {
//    try {
//        DB::connection()->getPdo();
//        return 'Conexão com o banco de dados está OK!';
//    } catch (\Exception $e) {
//        return 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
//    }
//});
//Route::get('/test-minimal', function () {
//    return '<h1>Página Carregada Corretamente!</h1>';
//});
//
//Route::get('/test-view', function () {
//    return view('test');
//});
//
//Route::get('/test-alpine', function () {
//    return view('test-alpine');
//
//});
Route::get('/test-flux', function () {
    return view('test-simple');
});
Route::get('/test-layout', function () {
    return view('test-layout');
});
Route::get('/test-minimal-layout', function () {
    return view('test-minimal-layout');
});
Route::get('/test-basic-layout', function () {
    return view('test-basic-layout');
});
Route::get('/test-alpine-layout', function () {
    return view('test-alpine-layout');
});
Route::get('/test-simple-view', function () {
    return view('test-simple-view');
});
Route::get('/test-livewire', function () {
    return view('test-livewire');
});
Route::get('/test-alpine-only', function () {
    return view('test-alpine-only');
});
Route::get('/test-dark-mode', function () {
    return view('test-dark-mode');
});
Route::get('/test-theme-toggle', function () {
    return view('test-basic-layout');
});

Route::get('/test-minimal', function () {
    return 'Página Carregada Corretamente!';
});

Route::get('/test-blog-layout', function () {
    return view('blog.index', ['techNews' => []]);
});
//Route::view('/', 'blog.index')->name('home');
Route::get('/', [TechNewsController::class, 'index'])->name('home');


Route::get('news/{id}', [TechNewsController::class, 'show'])->name('news.show');
Route::post('subscribe', [TechNewsController::class, 'subscribe'])->name('subscribe');
//
//Route::view('/test-footer', 'components.footer');
//
//
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('/test-alpine-flux', function () {
        return view('test-alpine-flux');
    });

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
