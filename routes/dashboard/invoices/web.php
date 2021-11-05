<?php
use Illuminate\Support\Facades\Route;
Route::get('/invoices',function(){
    return view('dashboard.invoices.list');
})->name('dashboard.invoices.list');

Route::get('/invoices/new',function(){
    return view('dashboard.invoices.new');
})->name('dashboard.invoices.new');

Route::get('invoices/print',function(){

})->name('dashboard.invoices.print');

Route::get('invoices/preview',function(){
    
})->name('dashboard.invoices.preview');