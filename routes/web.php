<?php


Auth::routes();

Route::get('/', 'SiteController@index')->name('index');
Route::get('/estrutura', 'SiteController@estrutura')->name('estrutura');
Route::get('/educacional', 'SiteController@educacional')->name('educacional');
Route::get('/diferenciais', 'SiteController@diferenciais')->name('diferenciais');
Route::get('/contato', 'SiteController@contato')->name('contato');
Route::post('/contato', 'SiteController@contato_send')->name('contato');






Route::get('/app', 'AdminController@index')->name('admin_index');



