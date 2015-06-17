<?php

resource('users', 'UsersController', ['only' => ['index', 'show']]);

Route::get('/', function () {
    return view('welcome');
});
