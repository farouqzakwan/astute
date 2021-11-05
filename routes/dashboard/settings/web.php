<?php
use Illuminate\Support\Facades\Route;

Route::get('',function(){
    dd('display all setting navigation menu beautifully');
})->name('dashboard.setting');

Route::get('/profile',function(){
    return view('dashboard.profile');
})->name('dashboard.setting.profile');

Route::get('/company',function(){
    return view('dashboard.setting');
})->name('dashboard.setting.company');

Route::get('/application',function(){
    return view('dashboard.settings.application');
})->name('dashboard.setting.application');

Route::get('application/tax-rate/new',function(){
    return view('dashboard.settings.new_tax_rate');
})->name('dashboard.setting.application.tax_rate.new');