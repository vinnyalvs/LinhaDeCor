<?php

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
    return view('welcome');
})->name('welcome.index');

/** Rotas da Campanha */

Route::get('/campanha', function () {
    return view('campaign.index');
})->name('campaign.index');

Route::get('/campanha/pesquisadores', function () {
    return view('campaign.listresearchers');
})->name('campaign.listresearchers');

Route::get('/campanha/colabore', function () {
    return view('campaign.collaborate');
})->name('campaign.collaborate');

Route::get('/campanha/planos-de-aula', function () {
    return view('campaign.classplans');
})->name('campaign.classplans');

Route::get('/campanha/oficinas', function () {
    return view('campaign.workshops');
})->name('campaign.workshops');

Route::get('/campanha/patrocinadores', function () {
    return view('campaign.sponsors');
})->name('campaign.sponsors');


Route::get('/filme', function () {
    return view('movie.synopsis');
});

Route::get('/menu', function () {
    return view('layout.menu');
});

Route::get('/filme/sinopse', function () {
    return view('movie.synopsis');
});

Route::get('/filme/direcao', function () {
    return view('movie.director');
});

Route::get('/filme/carta-intencao', function () {
    return view('movie.letter');
});

Route::get('/filme/produtores', function () {
    return view('movie.producers');
});

Route::get('/filme/ficha-tecnica', function () {
    return view('movie.sheet');
});

Route::get('/filme/caminhos-do-filme', function () {
    return view('movie.paths');
});

Route::get('/filme/objetivos', function () {
    return view('movie.listgoals');
})->name('campaign.listgoals');

// Em construção

Route::get('/contato', function () {
    return view('campaign.workshops');
})->name('campaing.contact');

Route::get('/curva-resistencias', function () {
    return view('campaign.workshops');
})->name('movie.curva');

Route::get('/campanha/outros-formatos', function () {
    return view('campaign.workshops');
})->name('movie.curva');

// Blog Routes

Route::get('blog',"BlogController@index")->name('blog.index');
Route::get('blog/novo',"BlogController@create")->middleware('auth')->name('blog.novo');
Route::get('blog/{id}',"BlogController@show")->name('blog.show');
Route::get('blog/{id}/edit',"BlogController@edit")->middleware('auth')->name('blog.edit');
Route::put('blog/{id}/',"BlogController@update")->middleware('auth')->name('blog.update');
Route::post('blog',"BlogController@store")->middleware('auth')->name('blog.store');;
Route::delete('blog/{id}',"BlogController@delete")->middleware('auth')->name('blog.delete');

//Timeline Routes

// Route::get('/',"TimelineController@index" )->name('timeline.index');
Route::get('/timeline',"TimelineController@index" );
Route::get('timeline/novo',"TimelineController@create" )->middleware('auth')->name('timeline.novo');;
Route::get('timeline/{id}',"TimelineController@show")->name('timeline.show');
Route::get('timeline/{id}/edit',"TimelineController@edit")->middleware('auth')->name('timeline.edit');
Route::post('timeline',"TimelineController@store")->middleware('auth')->name('timeline.store');
Route::put('timeline/{id}/',"TimelineController@update")->middleware('auth')->name('timeline.update');
Route::delete('timeline/{id}',"TimelineController@delete")->middleware('auth')->name('timeline.delete');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

Auth::routes();
