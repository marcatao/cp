<?php


Auth::routes();

Route::get('/', 'SiteController@index')->name('index');
Route::get('/colegio', 'SiteController@colegio_paraiso')->name('colegio_paraiso');
Route::get('/estrutura', 'SiteController@estrutura')->name('estrutura');


Route::get('/diferenciais', 'SiteController@diferenciais')->name('diferenciais');

Route::get('/educacional/bercario', 'SiteController@bercario')->name('bercario');
Route::get('/educacional/infantil', 'SiteController@infantil')->name('infantil');
Route::get('/educacional/fundamental', 'SiteController@fundamental')->name('fundamental');
Route::get('/educacional/ensino_medio', 'SiteController@ensino_medio')->name('ensino_medio');
Route::get('/educacional/integral', 'SiteController@integral')->name('integral');
Route::get('/educacional/sistema_ensino', 'SiteController@sistema_ensino')->name('sistema_ensino');
Route::get('/acontece', 'SiteController@acontece')->name('acontece');
 
foreach (\App\acontece::all() as $post){
      Route::get('/acontece/'.$post->link, 'SiteController@acontece_artigo')->name($post->link);
}   






Route::get('/informativos/psico_fono', 'SiteController@psico_fono')->name('psico_fono');
Route::get('/informativos/vestibular', 'SiteController@vestibular')->name('vestibular');
Route::get('/informativos/servicos', 'SiteController@servicos')->name('servicos');

Route::get('/contato', 'SiteController@contato')->name('contato');
Route::post('/contato', 'SiteController@contato_send')->name('contato');

Route::get('/depoimentos', 'SiteController@depoimentos')->name('depoimentos');






Route::get('/app', 'AdminController@index')->name('admin_index');
Route::get('/home', 'AdminController@index')->name('admin_index');
Route::get('/app/home', 'AdminController@index')->name('admin_index');

Route::get('/app/site/carrossel', 'AdminController@site_carrossel')->name('admin_site_carrossel');
Route::post('/app/site/carrossel', 'AdminController@site_carrossel_save')->name('admin_site_carrossel');
Route::get('/app/site/carrossel/{id}', 'AdminController@site_carrossel_del')->name('admin_site_carrossel_del');

Route::get('/app/site/estrutura', 'AdminController@site_estrutura')->name('admin_site_estrutura');
Route::post('/app/site/estrutura', 'AdminController@site_estrutura_save')->name('admin_site_estrutura');
Route::get('/app/site/estrutura/{id}', 'AdminController@site_estrutura_delete')->name('admin_site_estrutura_del'); 
Route::get('/app/site/estrutura-fim/{id}', 'AdminController@site_estrutura_fim')->name('admin_site_estrutura_fim'); 

Route::get('/app/site/categorias', 'AdminController@admin_site_categorias')->name('admin_site_categorias');
Route::post('/app/site/categorias', 'AdminController@admin_site_categorias_save')->name('admin_site_categorias');
Route::get('/app/site/categorias/{id}', 'AdminController@admin_site_categorias_delete')->name('admin_site_categorias_del');

Route::get('/app/site/acontece', 'AdminController@admin_site_acontece')->name('admin_site_acontece');
Route::get('/app/site/acontece_form/{id}', 'AdminController@admin_site_acontece_form')->name('admin_site_acontece_form');
Route::post('/app/site/acontece_form/{id}', 'AdminController@admin_site_acontece_save')->name('admin_site_acontece_form');
Route::get('/app/site/acontece_form_del/{id}', 'AdminController@acontece_form_del')->name('acontece_form_del');

Route::get('/app/site/admin_site_acontece_del_imagem/{id}', 'AdminController@admin_site_acontece_del_imagem')->name('admin_site_acontece_del_imagem');
Route::get('/app/site/admin_site_acontece_capa_imagem/{acontece}/{imagem}', 'AdminController@admin_site_acontece_capa_imagem')->name('admin_site_acontece_capa_imagem');



Route::get('questionario/', 'PesquisaController@index')->name('index_questionario');
Route::post('questionario/save', 'PesquisaController@store')->name('index_store');
Route::get('questionario/resultados', 'PesquisaController@resultados_pre')->name('resultados_pre');
Route::get('questionario/resultados/{id}', 'PesquisaController@resultados')->name('resultados');
Route::get('questionario/obrigado', 'PesquisaController@obrigado')->name('obrigado');

Route::get('questionario/mail/{id}', 'PesquisaController@mail_send')->name('mail');

Route::get('questionario/excell/{id}', 'PesquisaController@excell')->name('excell');