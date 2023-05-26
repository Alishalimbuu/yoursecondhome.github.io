<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AbouthostelController;
use App\Http\Controllers\admin\BedController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FacilityController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\LeaveController;
use App\Http\Controllers\admin\MealController;
use App\Http\Controllers\admin\MessageusController;
use App\Http\Controllers\admin\RoomController;
use App\Http\Controllers\admin\Roomgallery;
use App\Http\Controllers\admin\RoomgalleryController;
use App\Http\Controllers\admin\RuleController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SlideController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\StudentMessageController;
use App\Http\Controllers\admin\VisitorController;
use App\Http\Controllers\admin\WelcomeController;
use App\Http\Controllers\api\BookController;
use App\Http\Controllers\ProfileController;
use App\Models\Facility;
use Illuminate\Support\Facades\Auth;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Admin routes

Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('room', RoomController::class);
    Route::resource('/admin/bed', BedController::class)->names(['bed']);
    Route::resource('/admin/student', StudentController::class)->names(['student']);
    Route::resource('/admin/company', CompanyController::class)->names(['company']);
    Route::resource('/admin/slide', SlideController::class)->names(['slide']);
    Route::resource('/admin/service', ServiceController::class)->names(['service']);
    Route::resource('/admin/gallery', GalleryController::class)->names(['gallery']);
    Route::resource('/admin/about', AboutController::class)->names(['about']);
    Route::resource('/admin/facility', FacilityController::class)->names('facility');
    Route::resource('/admin/meal', MealController::class)->names(['meal']);
    Route::resource('/admin/about', AboutController::class)->names(['about']);
    Route::resource('/admin/booking', BookingController::class)->names(['booking']);
    Route::resource('/admin/message', MessageusController::class)->names(['message']);
    Route::resource('/admin/studentmessage', StudentMessageController::class)->names(['studentmessage']);
    Route::resource('/admin/rule', RuleController::class)->names(['rule']);
    Route::resource('/admin/welcome', WelcomeController::class)->names(['welcome']);
    Route::resource('/admin/roomgallery', RoomgalleryController::class)->names(['roomgallery']);
    Route::resource('/admin/abouthostel', AbouthostelController::class)->names(['abouthostel']);
    Route::resource('/admin/visitor', VisitorController::class)->names(['visitor']);
    Route::resource('/admin/leave', LeaveController::class)->names(['leave']);
});

require __DIR__ . '/adminauth.php';

Route::get('/', function () {
    return view('welcome');
    
});

