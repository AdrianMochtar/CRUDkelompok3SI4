<?php

Route::get('','BukuController@index')->name('index');
Route::get('/tambah','BukuController@tambah')->name('tambah');
Route::post('/insert','BukuController@insert')->name('insert');
Route::get('edit/{id}','BukuController@edit')->name('edit');
Route::post('edit/{id}','BukuController@submitedit')->name('submitedit');
Route::get('delete/{id}','BukuController@delete')->name('delete');
