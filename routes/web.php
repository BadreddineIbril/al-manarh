<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', ['name' => 'home']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'about']);
});
Route::get('/packages', function () {
    return view('packages', ['name' => 'packages']);
});
Route::get('/faq', function () {
    return view('faq', ['name' => 'faq']);
});
Route::get('/contact', function () {
    return view('contact', ['name' => 'contact']);
});
Route::get('/blog', function () {
    return view('blog', ['name' => 'blog']);
});


Route::get('/login', function () {
    return view('login', ['name' => 'login']);
});
Route::get('/register', function () {
    return view('register', ['name' => 'register']);
});
Route::get('/user/dashboard', function () {
    return view('user/dashboard', ['name' => '/user/dashboard']);
});
Route::get('/user/transfer-balance', function () {
    return view('user/transfer-balance', ['name' => '/user/transfer-balance']);
});
Route::get('/user/transactions', function () {
    return view('user/transactions', ['name' => '/user/transactions']);
});
Route::get('/user/referrals', function () {
    return view('user/referrals', ['name' => '/user/referrals']);
});
Route::get('/user/commissions', function () {
    return view('user/commissions', ['name' => '/user/commissions']);
});
Route::get('/user/twofactor', function () {
    return view('user/twofactor', ['name' => '/user/twofactor']);
});
Route::get('/user/deposit-money', function () {
    return view('user/deposit-money', ['name' => '/user/deposit-money']);
});
Route::get('/user/my-deposits', function () {
    return view('user/my-deposits', ['name' => '/user/my-deposits']);
});
Route::get('/user/invest-money', function () {
    return view('user/invest-money', ['name' => '/user/invest-money']);
});
Route::get('/user/my-investments', function () {
    return view('user/my-investments', ['name' => '/user/my-investments']);
});
Route::get('/user/withdraw-money', function () {
    return view('user/withdraw-money', ['name' => '/user/withdraw-money']);
});
Route::get('/user/my-withdrawals', function () {
    return view('user/my-withdrawals', ['name' => '/user/my-withdrawals']);
});
Route::get('/user/withdraw-accounts', function () {
    return view('user/withdraw-accounts', ['name' => '/user/withdraw-accounts']);
});
Route::get('/user/new-ticket', function () {
    return view('user/new-ticket', ['name' => '/user/new-ticke']);
});
Route::get('/user/my-tickets', function () {
    return view('user/my-tickets', ['name' => '/user/my-tickets']);
});
Route::get('/user/profile-setting', function () {
    return view('user/profile-setting', ['name' => '/user/profile-setting']);
});