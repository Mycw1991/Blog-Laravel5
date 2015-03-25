<?php

Route::get('/', [
        'as' => 'home',
                //alias//
        'uses' => 'HomeController@index'        
     
    // says what controller and method it is using//
]);

Route::get('/{slug}', [
    'as' => 'post',
    'uses' => 'PostController@getShow'
]);