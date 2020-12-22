<?php

Route::get('/consoles', 'Consoles\IndexController')->name('consoles.index');

Route::get('/consoles/{id}', 'Consoles\ShowController')->name('consoles.show');
