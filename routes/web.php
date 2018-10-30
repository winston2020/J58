<?php


Route::get('', 'HomeController@index');
Route::get('{one}/sitemap.xml', 'SiteMapController@index');
Route::get('/{one}', 'HomeController@index');
Route::get('/{one}/', 'HomeController@index');
Route::get('/{one}/{two}', 'HomeController@index');
Route::get('/{one}/{two}/{three}', 'HomeController@index');
Route::get('/{one}/{two}/{three}/{four}', 'HomeController@index');