<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\GmailCheckerController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;

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
Route::match(['get', 'post'], '/alumni_profile', [AlumniController::class, 'gotoProfile'])->name('alumni.profile');
Route::get('/alumni_announcements', [AlumniController::class, 'gotoAnnouncements'])->name('alumni.announcements');
Route::get('/alumni_survey', [AlumniController::class, 'gotoSurvey'])->name('alumni.survey');
Route::get('/alumni_notifications', [AlumniController::class, 'gotoNotifications'])->name('alumni.notifications');
Route::get('/alumni_events', [AlumniController::class, 'gotoEvents'])->name('alumni.events');
Route::get('/alumni_logout', [AlumniController::class, 'gotoHome'])->name('alumni.logout');

Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

Route::get('/admin_dashboard', [AdminController::class, 'gotoDashboard'])->name('admin.dashboard');
Route::match(['get', 'post'], '/admin_profile', [AdminController::class, 'gotoProfile'])->name('admin.profile');
Route::get('/admin_announcements', [AdminController::class, 'gotoAnnouncements'])->name('admin.announcements');
Route::get('/admin_survey', [AdminController::class, 'gotoSurvey'])->name('admin.survey');
Route::get('/admin_notifications', [AdminController::class, 'gotoNotifications'])->name('admin.notifications');
Route::get('/admin_events', [AdminController::class, 'gotoEvents'])->name('admin.events');
Route::get('/admin/view-data/{id}', [AdminController::class, 'gotoViewData'])->name('admin.viewData');
Route::get('/admin_logout', [AdminController::class, 'gotoHome'])->name('admin.logout');

Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
Route::delete('/admin/profile/delete', [AdminController::class, 'deleteAccount'])->name('admin.profile.delete');

Route::post('/alumni/profile/update', [AlumniController::class, 'updateProfile'])->name('alumni.profile.update');
Route::delete('/alumni/profile/delete', [AlumniController::class, 'deleteAccount'])->name('alumni.profile.delete');

Route::post('/alumni/survey/submit', [AlumniController::class, 'submitSurvey'])->name('alumni.survey.submit');

Route::post('/submit-announcement', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::post('/delete-announcement', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');
Route::post('/edit-announcement', [AnnouncementController::class, 'update'])->name('announcement.update');