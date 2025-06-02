<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EmailController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\NecessaryCategoryController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\WebContentController;
use App\Http\Controllers\MemberTitleController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MemberEventController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\Admin\InstituteController;
// Mini web
use App\Http\Controllers\SectionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MiniHomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Admin\NewPageController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SocialMediaLinksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WorkTimeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\HealthTipController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\FaxController; 
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SurveyCategoryController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CurrencyController;

use App\Http\Controllers\Admin\ExchangeRateController;


// end mini web


// Route::get('/user/{id}', [WebController::class,'userHomePage'])->name('home.user');
Route::get('/user/{id}/{first_name}{last_name}', [WebController::class, 'userHomePage'])->name('home.user');
Route::get('/get-slider/{user_id}', [SliderController::class, 'getSlider'])->name('get-slider');
Route::post('/summernote/upload', [WebController::class, 'upload'])->name('summernote.upload');
Route::post('/contact/store/{user_id}', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog/{slug}', [WebController::class, 'blogDetails'])->name('home.blog');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('set-locale', function (Illuminate\Http\Request $request) {
    $locale = $request->input('locale');
    Session::put('locale', $locale);
    return redirect()->back();
})->name('setLocale');


 Route::get('/', [HomeController::class, 'cryptoHome'])->name('home');