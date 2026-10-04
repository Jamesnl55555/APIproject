<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserEntry;

Route::post('/user-entry', [UserEntry::class, 'userEntering']);
Route::get('/get-users', function () {
    $users = \App\Models\User::all();
    return response()->json(["data" => $users]);
});