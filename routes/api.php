<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('countries', function () {
    return \App\Models\Country::query()->where('Population', '>', 100_000)
        ->orderBy('Population', 'descr')
        ->limit(5)
        ->get(['Code', 'Name', 'Population']);
});

Route::get('posts', function () {
    $posts =\App\Models\Post::query()->first()->toArray();
    dump($posts);
});
