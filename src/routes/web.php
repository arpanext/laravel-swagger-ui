<?php

Route::get('/', 'Consoles\IndexController')->name('consoles.index');

Route::get('/{id}', 'Consoles\ShowController')->name('consoles.show');
