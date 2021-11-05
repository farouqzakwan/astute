<?php
use Illuminate\Support\Facades\Route;

Route::get('/customers',function(){
    return view('dashboard.customers.list');
})->name('dashboard.customers.list');

Route::get('/customers/new',function(){
    return view('dashboard.customers.new');
})->name('dashboard.customers.new');