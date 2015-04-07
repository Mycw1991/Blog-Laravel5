<?php

Route::get('/', [
        'as' => 'home',
                //alias//
        'uses' => 'HomeController@index'        
     
    // says what controller and method it is using//
]);
// unauthaticated group //
Route::group( [
    'before' => 'guest'],function(){
    // ucsrf protection //
    Route::group([
    'before' => 'csrf'],function(){
         //create account(POST)//
        Route::post('/account/create', [
            'as' => 'account-create-post',
            'uses' =>'AccountController@postCreate'
        ]);
    });
    //create account(GET)//
    Route::get('/account/create', [
        'as' => 'account-create',
        'uses' =>'AccountController@getCreate'
    ]);
    
    Route::get('/account/activate/{code}', [
         'as' => 'account-activate',
        'uses' =>'AccountController@getActivate'
    ]);
    
    
});

Route::get('/overview/', [
    'as' => 'overview',
    'uses' => 'OverviewController@index'
]);

Route::get('/{slug}', [
    'as' => 'post',
    'uses' => 'PostController@getShow'
]);

