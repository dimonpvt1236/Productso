<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Dimonpvt\Productso\Http\Controllers'], function () {
    Route::get('category/{slug?}', 'PrsoCategoryController@show');
    Route::get('product/{slug}/{categoryid?}', 'PrsoProductController@show');
});
