<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\BookController;
use App\Http\Controllers\api\FeedbackapiController;
use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\api\StudentmessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Resources\UserResource;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return new UserResource($request->user());
});

Route::post('/user/login', [AuthController::class, 'login'])->name('user.login');
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('studentmessageapi', StudentmessageController::class);
    Route::apiResource('feedbackapi', FeedbackapiController::class);
    Route::get('user-profile', [AuthController::class, 'getProfile']);
    Route::put('update-user', [AuthController::class, 'updateUser']);
    Route::put('change-password', [AuthController::class, 'changePassword']);
});

Route::get('companyinfo', [ApiController::class, 'company']);
Route::get('serviceapi', [ApiController::class, 'service']);
Route::get('aboutapi', [ApiController::class, 'about']);
Route::get('mealapi', [ApiController::class, 'meal']);
Route::get('facilityapi', [ApiController::class, 'facility']);
Route::get('galleryapi', [ApiController::class, 'gallery']);
Route::get('slideapi', [ApiController::class, 'slide']);
Route::get('rooms', [ApiController::class, 'room']);
Route::get('ruleapi', [ApiController::class, 'rule']);
Route::get('welcomeapi', [ApiController::class, 'welcome']);
Route::apiResource('bookingapi', BookController::class);
Route::apiResource('messageapi', MessageController::class);
Route::get('roomgalleryapi', [ApiController::class, 'roomgallery']);
Route::get('abouthostelapi', [ApiController::class, 'abouthostel']);
Route::get('getfeedback', [ApiController::class, 'getfeedback']);

Route::post('/khalti/payment/verify', [PaymentController::class, 'verifyPayment']);
Route::post('/khalti/payment/store', [PaymentController::class, 'storePayment']);
