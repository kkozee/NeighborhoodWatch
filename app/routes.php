<?php

Route::get('/', array(
    'as' => 'home',
    'uses' => 'HomeController@home'
));

//Unauthenticated group

Route::group(array('before' => 'guest'), function(){

    Route::group(array('before' => 'csrf'), function(){
        Route::post('/signup', array(
            'as' => 'signup-post',
            'uses' => 'AccountController@postCreate'
        ));
    });

    Route::get('/signup', array(
        'as' => 'signup',
        'uses' => 'AccountController@getCreate'
    ));
});

//Incidents

Route::get('/incidents', array(
    'as' => 'incidents',
    'uses' => 'IncidentController@getIncidents'
));

Route::get('/incident-report', array(
    'as' => 'report-incident',
    'uses' => 'IncidentController@getIncidentReport'
));

//Contact

Route::get('/contacts', array(
    'as' => 'contact',
    'uses' => 'ContactController@getContact'
));