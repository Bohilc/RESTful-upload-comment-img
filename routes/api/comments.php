<?php

Route::prefix('comments')->group(function () {
    Route::get('{id}/img', 'Comments@index');
    Route::post('/img', 'Comments@store');
    Route::put('/img', 'Comments@update');
});
