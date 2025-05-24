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


Route::get('/alumni_information/dashboard', function () {
    return view('alumni_folder.dashboard');
})->name('alumni.dashboard');
Route::get('/confirmation-code', function () {
    return view('confirmation_code');
})->name('confirmation.form');

Route::get('/alumni_dashboard', [AlumniController::class, 'gotoDashboard'])->name('alumni.dashboard');
Route::get('/alumni_profile', [AlumniController::class, 'gotoProfile'])->name('alumni.profile');
Route::get('/alumni_announcements', [AlumniController::class, 'gotoAnnouncements'])->name('alumni.announcements');
Route::get('/alumni_survey', [AlumniController::class, 'gotoSurvey'])->name('alumni.survey');
Route::get('/alumni_notifications', [AlumniController::class, 'gotoNotifications'])->name('alumni.notifications');
Route::get('/alumni_events', [AlumniController::class, 'gotoEvents'])->name('alumni.events');
Route::get('/alumni_home', [AlumniController::class, 'gotoHome'])->name('alumni.logout');


