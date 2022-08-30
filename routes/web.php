<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\PatientController;
// use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SymptomController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\Backend\DisorderController;
use App\Http\Controllers\Backend\ScreeningController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ScreeningQuestionController;
// use App\Http\Controllers\Frontend\ScreeningCategoryController;
use App\Http\Controllers\Frontend\ScreeningTestController;


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

// Route::get('/', function () {
//     return "This site is underconstruction";
// });

// Route::view('/home', 'frontend.layouts.dashboard.dashboard');

// Route::view('/login', 'login-registration.login');
// Route::view('/registration', 'login-registration.registration');

//~~~~~~~ frontend route ~~~~~~~
Route::get('/home', [HomeController::class, 'home'])->name('home');

//login
Route::get('/login', [UserController::class, 'loginform'])->name('frontend.login');
Route::post('/login-store', [UserController::class, 'loginstore'])->name('login.store');

// Route::group(['middleware'=>'auth'],function(){
    
//logout route
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//patient sign up
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/signup-store', [UserController::class, 'signupStore'])->name('signup.store');

//doctor sign up
Route::get('/doctor/signup', [UserController::class, 'docSignUp'])->name('doctor.signup');
Route::post('/doctor/signup-store', [UserController::class, 'docSignUpStore'])->name('doctor.signup.store');

//appointment-booking route
Route::get('/appointment-booking', [AppointmentController::class, 'booking'])->name('appointment.booking');
Route::post('/appointment-store', [AppointmentController::class, 'store'])->name('appointment.store');

//doctor-searching route
Route::get('/doctor-search', [DoctorController::class, 'search'])->name('doctor.search');


//screening-category route

// Route::view('/screening_test','frontend.layouts.screening.screening_test')->name('screening_test');
Route::get('/screening-test', [ScreeningTestController::class, 'test'])->name('screening.test');
Route::post('/screening-store', [ScreeningTestController::class, 'screeningStore'])->name('frontend.screening.store');
Route::get('/screening-category', [ScreeningTestController::class, 'category'])->name('screening.category');
Route::get('/screening-result/{id}',[ScreeningTestController::class,'result'])->name('screening.result');
Route::get('/screening-list', [ScreeningTestController::class, 'list'])->name('frontend.screening.list');
// });

//~~~~~~ backend route ~~~~~~~

//admin-login route
Route::get('/admin/login',[DashboardController::class,'login'])->name('login');
Route::post('/admin/do-login',[DashboardController::class,'doLogin'])->name('admin.do.login');

//middleware
Route::group(['middleware'=>['auth', 'VerifyAdmin'], 'prefix'=>'admin'], function() {


//admin-logout route
    
Route::get('/logout',[DashboardController::class,'adminlogout'])->name('admin.logout');


//dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


//doctor route
Route::get('/doctor-create', [DoctorController::class, 'create'])->name('doctor.create');
Route::get('/doctor-list', [DoctorController::class, 'list'])->name('doctor.list');
Route::post('/doctor-store', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor-view/{id}', [DoctorController::class, 'view'])->name('doctor.view');
Route::get('/doctor-delete/{id}', [DoctorController::class, 'delete'])->name('doctor.delete');
Route::get('/doctor-edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('/doctor-update/{id}', [DoctorController::class, 'update'])->name('doctor.update');

//patient route
Route::get('/patient-create', [PatientController::class, 'create'])->name('patient.create');
Route::get('/paient-list', [PatientController::class, 'list'])->name('patient.list');
Route::post('/patient-store', [PatientController::class, 'store'])->name('patient.store');
Route::get('/patient-delete/{id}', [PatientController::class, 'delete'])->name('patient.delete');
Route::get('/patient-edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
Route::post('/patient-update/{id}', [PatientController::class, 'update'])->name('patient.update');


//schedule route
Route::get('/schedule-create', [ScheduleController::class, 'create'])->name('schedule.create');
Route::get('/schedule-list', [ScheduleController::class, 'list'])->name('schedule.list');
Route::post('/schedule-store', [ScheduleController::class, 'store'])->name('schedule.store');

//screening route
Route::get('/screening-create', [ScreeningController::class, 'create'])->name('screening.create');
Route::get('/screening-list', [ScreeningController::class, 'list'])->name('screening.list');
Route::post('/screening-store', [ScreeningController::class, 'store'])->name('screening.store');


 //appointment route
Route::get('/appointment-create', [AppointmentController::class, 'create'])->name('appointment.create');
Route::get('/appointment-list', [AppointmentController::class, 'list'])->name('appointment.list');
// Route::post('/appointment-store', [AppointmentController::class, 'store'])->name('appointment.store');
// Route::get('/appointment-delete',[AppointmentController::class,'delete'])->name('appointment.delete');


// disorder route
Route::get('/disorder-create', [DisorderController::class, 'create'])->name('disorder.create');
Route::get('/disorder-list', [DisorderController::class, 'list'])->name('disorder.list');
Route::post('/disorder-store', [DisorderController::class, 'store'])->name('disorder.store');
Route::get('/disorder-delete/{id}', [DisorderController::class, 'delete'])->name('disorder.delete');
Route::post('/disorder-symptom-store/{id}', [DisorderController::class, 'storeSymptom'])->name('storeSymptom');
Route::get('/disorder-symptom-create/{id}', [DisorderController::class, 'symptomCreate'])->name('disorder.symptom.create');


//symptom route
Route::get('/symptom-create', [SymptomController::class, 'create'])->name('symptom.create');
Route::get('/symptom-list', [SymptomController::class, 'list'])->name('symptom.list');
Route::post('/symptom-store', [SymptomController::class, 'store'])->name('symptom.store');
Route::get('/symptom-view', [SymptomController::class, 'view'])->name('symptom.view');
Route::get('/symptom-delete/{id}', [SymptomController::class, 'delete'])->name('symptom.delete');


//question route
Route::get('/question-disorder/list', [ScreeningQuestionController::class, 'list'])->name('question.disorder.list');
Route::get('/question-create', [ScreeningQuestionController::class, 'create'])->name('question.create');
Route::post('/question-store', [ScreeningQuestionController::class, 'store'])->name('question.store');
Route::get('/question-disorder/edit/{id}', [ScreeningQuestionController::class, 'edit'])->name('question-disorder.edit');
Route::post('/question-disorder/update/{id}', [ScreeningQuestionController::class, 'update'])->name('question-disorder.update');

 }

);
