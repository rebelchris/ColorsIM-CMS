<?php

use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Basic route, shows all users
 */
Route::get('/', function () {
    $users = User::all();
    return view('users', ['users' => $users]);
});

/**
 * User detail route, renders 4 buttons
 */
Route::get('user/{id}', function ($id) {
    return view('user-detail', ['id' => $id]);
})->name('user-detail');

/**
 * Update user route, once a person clicked a color this link is called
 * We call the User based on the id, and set the new color.
 * Then the user gets saved and we redirect to the homepage
 */
Route::get('update/{color}/{id}', function ($color, $id) {
    $user = User::find($id);
    $user->color = $color;
    $user->save();
    return redirect('/');
})->name('user-update');
