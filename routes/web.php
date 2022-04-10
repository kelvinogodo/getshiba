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
    return view('index');
});



Route::get("/dashboard", [HomeController::class, "dashboard"])->name("dashboard");
Route::get("/accountinfo", [HomeController::class, "accountinfo"])->name("accountinfo");
Route::get("/faqs", [HomeController::class, "faqs"])->name("faqs");
Route::get("/login", [HomeController::class, "login"])->name("login");
Route::get("/plans", [HomeController::class, "plans"])->name("plans");
Route::get("/referrals", [HomeController::class, "referrals"])->name("referrals");
Route::get("/register", [HomeController::class, "register"])->name("register");
Route::get("/reinvest", [HomeController::class, "reinvest"])->name("reinvest");
Route::get("/transactions", [HomeController::class, "transactions"])->name("transactions");



Route::resource("contact", ContactUsController::class);

