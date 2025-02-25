<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    logger('repo 2');
    return 'ok: repo 2';
});
