<?php

use App\Http\Controllers\LogviewerController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('landing.index');
})->name('home');

Route::get('/register',function(){
    return view('landing.register');
})->name('register');

Route::get('/login',function(){
    return view('dashboard.login');
})->name('login');

Route::get('/forget-password',function(){
    return view('dashboard.forget_password');
})->name('forget-password');

Route::get('/reset-password/{temporaryCode}',function(){
    return view('dashboard.reset_password');
})->name('reset-password');


Route::view('/about-us','landing.about-us')->name('about-us');
Route::view('/pricing','landing.pricing')->name('pricing');
Route::view('/careers','landing.careers')->name('careers');
Route::view('/faq','landing.faq')->name('faq');
Route::view('/pdpa','landing.pdpa')->name('pdpa');
Route::view('/changelog','landing.changelog')->name('changelog');
Route::view('/policies','landing.policies')->name('policies');


Route::middleware('auth')->group(function () {
    
    Route::bind('user',function($value){
        return Auth()->user();
    });

    Route::get('/dashboard',function(){
        return view('dashboard.dashboard.index');
    })->name('dashboard.index');
     
    Route::get('/messages',function(){
        // return view('dashboard.messages');
    })->name('dashboard.messages');
    
    Route::get('/notifications',function(){
        // return view('dashboard.notifications');
    })->name('dashboard.notifications');
    
    Route::get('/logout',function(){
        $user = User::find(Auth()->user()->id);
        Auth::logout();
        $user->tokens()->delete();
        return redirect()->route('home');
    })->name('dashboard.logout');

    require __DIR__.'/dashboard/invoices/web.php';
    require __DIR__.'/dashboard/customers/web.php';
    Route::prefix('settings')->group(function () {
        require __DIR__.'/dashboard/settings/web.php';
    });

    Route::get('log', function(){
        return view('dashboard.logs.index');
    });
});