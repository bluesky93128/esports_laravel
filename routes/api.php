<?php
Route::post('/get-rest-register-data', 'Auth\RestAPIController@getRestData');

// Route::get('/restapi/get-rest-age-group-data', 'Auth\RestAPIController@getRestAgeGroupData');
Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    
});
