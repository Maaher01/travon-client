<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/contact', [HomepageController::class, 'contact']);
Route::get('/about-us', [HomepageController::class, 'aboutus']);
Route::get('/destinations', [HomepageController::class, 'departments']);
Route::get('/destination-details/{id}', [HomepageController::class, 'departmentdetails']);
Route::get('/tours', [HomepageController::class, 'courses']);
Route::get('/tour-details/{id}', [HomepageController::class, 'coursedetails']);
Route::get('/gallery', [HomepageController::class, 'gallery']);
Route::get('/faculty-members', [HomepageController::class, 'facultymembers']);
Route::get('/faculty-members-details/{id}', [HomepageController::class, 'facultymembersdetails']);
Route::get('/notice-board', [HomepageController::class, 'noticeboard']);
Route::get('/noticeboard-details', [HomepageController::class, 'noticeboarddetails']);
Route::get('/team', [HomepageController::class, 'adminstaff']);
Route::get('/team-details/{id}', [HomepageController::class, 'adminstaffdetails']);
Route::get('/blogs', [HomepageController::class, 'blogs']);
Route::get('/blog-details/{id}', [HomepageController::class, 'blogdetails']);
Route::get('/news-events', [HomepageController::class, 'newsevent']);
Route::get('/news-event-details/{id}', [HomepageController::class, 'newseventdetails']);
Route::get('/noticeboard', [HomepageController::class, 'noticeboard']);
Route::get('/noticeboarddetails/{id}', [HomepageController::class, 'noticeboarddetails']);
Route::get('/latest-notices', [HomepageController::class, 'getlatestnotices']);

Route::get('/club/{id}', [HomepageController::class, 'club']);
Route::get('/result', [HomepageController::class, 'result']);
Route::get('/tutionfees', [HomepageController::class, 'tutionfees']);
Route::get('/class-routine', [HomepageController::class, 'classroutine']);
Route::get('/academic-calendar', [HomepageController::class, 'academiccalendar']);
Route::get('/admission', [HomepageController::class, 'admission']);
Route::get('/apply-now', [HomepageController::class, 'apply']);
Route::get('/job', [HomepageController::class, 'job']);
Route::get('/tutionfee', [HomepageController::class, 'tutionfee']);
Route::get('/brochure', [HomepageController::class, 'brochure']);
Route::get('/page', [HomepageController::class, 'page']);
Route::get('/pagedetails/{slug}', [HomepageController::class, 'pagedetails']);
Route::post('/studentregistration', [HomepageController::class, 'studentregistration']);
Route::post('/messagesubmit', [HomepageController::class, 'messagesubmit']);

Route::post('/bookings', [HomepageController::class, 'bookticket'])->name('bookings');;
