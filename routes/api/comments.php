<?php

Route::prefix('comments')->group(function () {
    Route::get('/img', 'Comments@index');
    Route::post('/img', 'Comments@store');
});
