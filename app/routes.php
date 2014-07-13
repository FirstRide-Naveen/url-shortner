<?php

Route::get('/', 'HomeController@index');

Route::post('/create-short-url', 'UrlController@createShortUrl');

Route::get('/{code}', 'UrlController@getUrl');

?>