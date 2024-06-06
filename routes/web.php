<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\paginaInicial::class, 'paginaInicial'])->name('site.paginaInicial');

Route::get('/pagina-inicial', [App\Http\Controllers\paginaInicial::class, 'redirect'])->name('site.paginaInicial.redirect');

Route::get('/produtos', [App\Http\Controllers\produtos::class, 'produtos'])->name('site.produtos');

Route::redirect('/produto', '/produtos');

Route::get('/sobreNos', [App\Http\Controllers\sobreNos::class, 'sobreNos'])->name('site.sobreNos');
Route::redirect('/sobrenos', '/sobreNos');
Route::redirect('/sobre-nos', '/sobreNos');


Route::get('/contato', [App\Http\Controllers\contato::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\contato::class, 'saveContato'])->name('site.contato');

Route::get('/exibirdados', [App\Http\Controllers\contato::class, 'exibir'])->name('contato.exibir');

Route::get('/exibirdados/{id}/editar', [contato::class, 'editar'])->name('contato.editar');


Route::put('/exibirdados/{id}', [contato::class, 'atualizar'])->name('site.contato.atualizar');

Route::delete('/exibirdados/{id}', [App\Http\Controllers\contato::class,'deletar'])->name('site.contato.deletar');

Route::fallback([\App\Http\Controllers\fallback::class,'fallback']); 