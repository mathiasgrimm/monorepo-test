<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    logger('repo 1');
    return 'ok: repo 1';
});
