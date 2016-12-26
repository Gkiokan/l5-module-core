<?php

Route::group(['middleware' => 'web', 'prefix' => 'core', 'namespace' => 'Gkiokan\Core\Http\Controllers'], function()
{
    Route::get('/', 'CoreController@index');
});
