<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function() {

            Route::resource('/countries', 'geo\geosystem\CountriesController');

            Route::resource('/zones', 'geo\geosystem\ZonesController');

            Route::resource('/regions', 'geo\geosystem\RegionsController');

            Route::resource('/subregions', 'geo\geosystem\SubregionsController');


    });



