<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('backend.dashboard');
});
