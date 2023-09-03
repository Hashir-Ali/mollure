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


use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\checkSalon;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('more-mollure', [HomeController::class, 'more_mollure'])->name('more-mollure');
Route::get('how-it-works', [HomeController::class, 'how_works'])->name('how-works');
Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('contact-us', [HomeController::class, 'contact_us_post'])->name('contact_us_post');
Route::get('terms-conditions', [HomeController::class, 'term_condition'])->name('term_condition');
Route::get('privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('upload', [HomeController::class, 'upload_image'])->name('upload_image');


Route::get('register', [SalonController::class, 'intersection_register']);
Route::get('nl/register', [SalonController::class, 'intersection_register_nl']);
Route::get('{user_type}/register', [SalonController::class, 'register']);
Route::get('{user_type}/nl/register', [SalonController::class, 'register_nl']);
Route::post('register', [SalonController::class, 'profile_save'])->name('profile_save');
Route::get('login', [SalonController::class, 'login'])->name('login');
Route::post('login', [SalonController::class, 'login_post'])->name('login_post');
Route::get('logout', [SalonController::class, 'logout'])->name('logout');
Route::get('verify_email', [SalonController::class, 'verify_email'])->name('verify_email');
Route::post('forget_pass', [SalonController::class, 'forget_pass'])->name('forget_pass');
Route::get('password-recovery', [SalonController::class, 'password_recovery'])->name('password_recovery');

Route::get('listing', [HomeController::class, 'prof_listing'])->name('prof_listing');
Route::get('listing_filter', [HomeController::class, 'prof_listing_2'])->name('prof_listing_2');
Route::get('professional/{pid}/{nm}/{type}', [HomeController::class, 'prof_detail'])->name('prof_detail');
Route::get('autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');
Route::get('profesdt/{d}', [HomeController::class, 'profesdt']);
Route::post('province_list', [HomeController::class, 'province_list'])->name('province_list');
Route::post('municipality_list/{t?}', [HomeController::class, 'municipality_list'])->name('municipality_list');
Route::post('prof_ajax', [HomeController::class, 'prof_ajax'])->name('prof_ajax');
Route::get('blog', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::post('book', [HomeController::class, 'book'])->name('book');
Route::get('client_home', [HomeController::class, 'client_home'])->name('client_home');

Route::get('favorites', [HomeController::class, 'my_favorites'])->name('my_favorites');
Route::get('rating_reviews', [HomeController::class, 'rating_reviews'])->name('rating_reviews');
Route::get('bookings', [HomeController::class, 'bookings'])->name('bookings');
Route::post('ajax/check', [HomeController::class, 'ajaxcall'])->name('ajaxcall');
Route::post('ajax/user', [HomeController::class, 'user_ajax'])->name('user_ajax');
Route::post('ajax/makebooking', [HomeController::class, 'makebooking'])->name('makebooking');
Route::get('professionals/{pid}/{nm}', [HomeController::class, 'prof_detail_add'])->name('prof_detail_add');
Route::post('ajax/updatebooking', [HomeController::class, 'updatebooking'])->name('updatebooking');


Route::get('/nl', [HomeController::class, 'nl_home'])->name('nl_home');
//Route::get('nl/register', [SalonController::class, 'nl_profile_register'])->name('nl_register');
//Route::get('nl/company_register', [SalonController::class, 'nl_company_register']);
//Route::get('nl/individual_register', [SalonController::class, 'nl_individual_register']);
Route::get('nl/more-mollure', [HomeController::class, 'nl_more_mollure'])->name('nl_more-mollure');
Route::get('nl/about-us', [HomeController::class, 'nl_about'])->name('nl_about-us');
Route::get('nl/how-it-works', [HomeController::class, 'nl_how_works'])->name('nl_how-works');
Route::get('nl/terms-conditions', [HomeController::class, 'nl_term_condition'])->name('nl_term_condition');
Route::get('nl/contact-us', [HomeController::class, 'nl_contact_us'])->name('nl_contact_us');
Route::get('nl/login', [SalonController::class, 'nl_login'])->name('nl_login');

// Route::get('set_prof_cate/{id}', [SalonController::class, 'set_prof_cate']);


Route::get('mail_test', [HomeController::class, 'mail_test']);


Route::group(['middleware' => ['checkSalon']], function () {
	Route::get('dashboard', [SalonController::class, 'dashboard'])->name('dashboard');
	Route::get('dashboard_o', [SalonController::class, 'dashboard_o'])->name('dashboard_o');
	Route::post('dashboard', [SalonController::class, 'dashboard_update'])->name('dashboard_update');
	Route::post('fixed_location_update', [SalonController::class, 'fixed_location_update'])->name('fixed_location_update');
	Route::post('salon_add', [SalonController::class, 'salon_add'])->name('salon_add');
	Route::post('salon_ajx', [SalonController::class, 'salon_ajx'])->name('salon_ajx');

	Route::post('desire_location_update', [SalonController::class, 'desire_location_update'])->name('desire_location_update');
	Route::post('desire_add_province', [SalonController::class, 'desire_add_province'])->name('desire_add_province');
	Route::post('password_update', [SalonController::class, 'password_update'])->name('password_update');

	Route::get('nl/dashboard', [SalonController::class, 'nl_dashboard'])->name('nl_dashboard');
	Route::get('nl/dashboard_o', [SalonController::class, 'nl_dashboard_o'])->name('nl_dashboard_o');
	Route::post('nldashboard', [SalonController::class, 'nl_dashboard_update'])->name('nl_dashboard_update');
	Route::post('nl/fixed_location_update', [SalonController::class, 'nl_fixed_location_update'])->name('nl_fixed_location_update');
	Route::post('nl/salon_add', [SalonController::class, 'nl_salon_add'])->name('nl_salon_add');
	Route::post('nl/salon_ajx', [SalonController::class, 'nl_salon_ajx'])->name('nl_salon_ajx');
	Route::post('nl/salon_ajx', [SalonController::class, 'nl_salon_ajx'])->name('nl_salon_ajx');
	Route::post('nl/desire_location_update', [SalonController::class, 'nl_desire_location_update'])->name('nl_desire_location_update');
	Route::post('nl/desire_add_province', [SalonController::class, 'nl_desire_add_province'])->name('nl_desire_add_province');

	Route::get('calandar', [SalonController::class, 'prof_calendar'])->name('prof_calendar');
	Route::post('ajax/calandar', [SalonController::class, 'ajx_calendar'])->name('ajx_calendar');
    Route::post('ajax/booking_detail', [SalonController::class, 'ajx_booking_detail'])->name('ajx_booking_detail');
    Route::post('ajax/booking_update', [SalonController::class, 'ajx_booking_update'])->name('ajx_booking_update');
    Route::get('settings', [SalonController::class, 'prof_setting'])->name('prof_setting');
    Route::post('ajax/settings', [SalonController::class, 'ajx_prof_setting'])->name('ajx_prof_setting');
	Route::get('client-list', [SalonController::class, 'client_list'])->name('client_list');
});



Route::get('client-list', [SalonController::class, 'client_list'])->name('client_list');
Route::get('messages', [SalonController::class, 'prof_messages'])->name('prof_messages');
Route::get('payment-setting', [SalonController::class, 'payment_setting'])->name('payment_setting');

Route::get('edmin/login', [AdminController::class, 'login']);
Route::post('edmin/login', [AdminController::class, 'loginAct'])->name('loginact');

Route::group(['middleware' => ['checkAdmin'],'prefix' => 'edmin'], function () {
	Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
	Route::get('add_professionals', [AdminController::class, 'add_professionals'])->name('admin_add_professionals');
	Route::get('professionals/{s?}', [AdminController::class, 'professionals'])->name('admin_professionals_list');
	Route::post('ajax', [AdminController::class, 'ajax_req'])->name('admin_ajx');
	Route::get('approve_detail', [AdminController::class, 'approve_detail'])->name('approve_detail');
	Route::get('professionals_service_list/{s?}', [AdminController::class, 'professionals_service_list'])->name('professionals_service_list');
	Route::get('service_detail', [AdminController::class, 'service_detail'])->name('service_detail');
	Route::post('admin_prof_update', [AdminController::class, 'admin_prof_update'])->name('admin_prof_update');
	Route::post('admin_fixed_location_update', [AdminController::class, 'fixed_location_update'])->name('admin_fixed_location_update');
	Route::post('admin_salon_add', [AdminController::class, 'salon_add'])->name('admin_salon_add');
	Route::post('admin_desire_location_update', [AdminController::class, 'desire_location_update'])->name('admin_desire_location_update');
	Route::post('admin_desire_add_province', [AdminController::class, 'desire_add_province'])->name('admin_desire_add_province');
	Route::get('visitor_queries/{s?}', [AdminController::class, 'visitor_query_list'])->name('visitor_query_list');

	Route::get('language_keywords', [AdminController::class, 'language_keyword'])->name('language_keyword');
	Route::post('language_keywords', [AdminController::class, 'save_language_keyword'])->name('save_language_keyword');

	Route::get('category', [AdminController::class, 'category'])->name('category');
	Route::post('common_ajax', [AdminController::class, 'common_ajax'])->name('admin_common_ajx');
	Route::post('update_cate', [AdminController::class, 'update_cate'])->name('update_cate');
	Route::get('page_content', [AdminController::class, 'page_content'])->name('page_content');
	Route::post('update_content', [AdminController::class, 'update_content'])->name('update_content');
	Route::get('menus', [AdminController::class, 'menus'])->name('menus');
	Route::post('update_menu', [AdminController::class, 'update_menu'])->name('update_menu');
	Route::get('settings', [AdminController::class, 'settings'])->name('settings');
	Route::post('update_setting', [AdminController::class, 'update_setting'])->name('update_setting');
	Route::get('email_template', [AdminController::class, 'email_template'])->name('email_template');
	Route::post('update_email_template', [AdminController::class, 'update_email_template'])->name('update_email_template');

	Route::post('send_manual_mail', [AdminController::class, 'send_manual_mail'])->name('send_manual_mail');
	Route::post('preview_manual_mail', [AdminController::class, 'preview_manual_mail'])->name('preview_manual_mail');

	Route::get('municiplaity', [AdminController::class, 'municiplaity'])->name('municiplaity');
	Route::post('save_municipality', [AdminController::class, 'save_municipality'])->name('save_municipality');
	Route::get('provinces', [AdminController::class, 'provinces'])->name('provinces');
	Route::post('save_province', [AdminController::class, 'save_province'])->name('save_province');

	Route::get('nl/service_detail', [AdminController::class, 'nl_service_detail'])->name('nl_service_detail');
	Route::post('nl/admin_fixed_location_update', [AdminController::class, 'nl_fixed_location_update'])->name('nl_admin_fixed_location_update');
	Route::post('nl/admin_salon_add', [AdminController::class, 'nl_salon_add'])->name('nl_admin_salon_add');
	Route::post('nl_ajax', [AdminController::class, 'nl_ajax_req'])->name('nl_admin_ajx');
	Route::post('nl/admin_desire_location_update', [AdminController::class, 'nl_desire_location_update'])->name('nl_admin_desire_location_update');
	Route::post('nl/admin_desire_add_province', [AdminController::class, 'nl_desire_add_province'])->name('nl_admin_desire_add_province');
});


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});