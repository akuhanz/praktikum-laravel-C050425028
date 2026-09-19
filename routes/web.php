<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Mahasiswa;
Route::get('/mahasiswa', function () {
$data = Mahasiswa::all();
return view('mahasiswa.index', compact('data'));
});