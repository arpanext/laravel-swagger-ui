<?php

Route::get('/consoles', 'Swagger\Consoles\IndexController')->name('consoles.index');

Route::get('/consoles/{id}', 'Swagger\Consoles\ShowController')->name('consoles.show');
