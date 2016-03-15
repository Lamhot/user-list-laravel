<?php

Route::group(['middleware' => 'web'], function () {
    Route::resource('/users', 'UserController');
});

