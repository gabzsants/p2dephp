<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\paginaInicial::class, 'paginaInicial'])->name('site.paginaInicial');

Route::get('/pagina-inicial', [App\Http\Controllers\paginaInicial::class, 'redirect'])->name('site.paginaInicial.redirect');

Route::get('/produtos', [App\Http\Controllers\produtos::class, 'produtos'])->name('site.produtos');

Route::get('/sobreNos', [App\Http\Controllers\sobreNos::class, 'sobreNos'])->name('site.sobreNos');

Route::get('/compreAgora', [App\Http\Controllers\compreAgora::class, 'compreAgora'])->name('site.compreAgora');

Route::get('/contato', [App\Http\Controllers\contato::class, 'contato'])->name('site.contato');

Route::fallback([\App\Http\Controllers\fallback::class,'fallback']); 