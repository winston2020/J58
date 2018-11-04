<?php


Route::get('', 'HomeController@index');
Route::get('{one}/sitemap.xml', 'SiteMapController@index');
Route::get('/{one}', 'HomeController@index')->middleware('cache.response:1000525600');
Route::get('/{one}/', 'HomeController@index')->middleware('cache.response:1000525600');
Route::get('/{one}/{two}', 'HomeController@index')->middleware('cache.response:1000525600');
Route::get('/{one}/{two}/{three}', 'HomeController@index')->middleware('cache.response:1000525600');
Route::get('/{one}/{two}/{three}/{four}', 'HomeController@index')->middleware('cache.response:1000525600');