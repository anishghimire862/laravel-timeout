<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
		sleep(70);
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';
