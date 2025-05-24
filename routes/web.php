<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\GmailCheckerController;

Route::get('/', function () {
    return view('index');
});

Route::get('/AuthLogin',[LoginController::class, 'gotoLogin'])->name('login');
Route::get('/',[LoginController::class, 'gotoHome'])->name('home');
Route::get('/Alumni_CheckGmail',[AlumniController::class, 'gotoAlumni'])->name('alumni');

Route::post('/check-gmail', [GmailCheckerController::class, 'checkEmail'])->name('check.gmail');
Route::get('/confirm-code', fn() => view('confirmation_code'))->name('confirm.code.page');
Route::post('/verify-code', [GmailCheckerController::class, 'verifyCode'])->name('verify.code');
Route::post('/register-email', [GmailCheckerController::class, 'registerEmail'])->name('register.email');


Route::get('/alumni_forms/part1', function () {
    return view('alumni_forms.part1');
})->name('alumni.form.part1');
Route::get('/confirmation-code', function () {
    return view('confirmation_code');
})->name('confirmation.form');


