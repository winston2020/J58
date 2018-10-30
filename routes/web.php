<?php


Route::get('', 'HomeController@index');
Route::get('{one}/sitemap.xml', 'SiteMapController@index');
Route::get('/{one}', 'WeController@index');
Route::get('/{one}/', 'WeController@index');
Route::get('/{one}/{two}', 'WeController@index');
Route::get('/{one}/{two}/{three}', 'WeController@index');
Route::get('/{one}/{two}/{three}/{four}', 'WeController@index');