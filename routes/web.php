<?php

use App\Http\Controllers\StuentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AcadamicController;
use App\Http\Controllers\SupportController;
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
    return view('welcome');
});

// Route::get('/student/all', function(){
//     return view('student.index');
// });

// Route::get('/student/home', function(){
//     return view('student.home');
// });

Route::get('/student/home',[StuentController::class, 'home'])->name('student.home');
Route::get('/student/index',[StuentController::class, 'index'])->name('student.index');
Route::get('/student/create',[StuentController::class, 'create'])->name('student.create');
Route::post('/student/store',[StuentController::class, 'store'])->name('student.store');
Route::get('/student/{student_id}',[StuentController::class,'edit'])->name('student.edit');
Route::put('/student/{student_id}',[StuentController::class,'update'])->name('student.update');
Route::get('/student/delete/{student_id}',[StuentController::class,'delete'])->name('student.delete');


Route::get('/staff/create',[StaffController::class,'regstaff'])->name('staff.create');
Route::post('/staff/store',[StaffController::class,'store'])->name('staff.store');
Route::get('/login',[StaffController::class,'login'])->name('login');
Route::post('login_user',[StaffController::class,'login_user'])->name('login_user');
// Route::get('/dashboard',[StaffController::class,'dashboard'])->name('dashboard')->middleware('isLogedIn');
Route::get('/logout',[StaffController::class,'logout'])->name('logout');
Route::get('/profile',[StaffController::class,'profile'])->name('profile');
Route::post('/update_photo', [StaffController::class, 'update_photo'])->name('update_photo');
Route::get('/staff/{user_id}/editDeatail', [StaffController::class, 'editDeatail'])->name('staff.editDeatail');
Route::put('/staff/{user_id}/updateDeatail', [StaffController::class, 'updateDeatail'])->name('staff.updateDeatail');
Route::get('/staff/{user_id}', [StaffController::class, 'password'])->name('staff.password');
Route::put('/staff/{user_id}', [StaffController::class, 'updatePassword'])->name('staff.updatePassword');
Route::get('/staff/delete/{user_id}',[StaffController::class,'delete'])->name('staff.delete');


Route::get('/dash/create2', [AnnouncementController::class,'annauns'])->name('dash.create2');
Route::post('/dash/store1',[AnnouncementController::class,'store1'])->name('dash.store1');
Route::post('/dash/store2',[AnnouncementController::class,'store2'])->name('dash.store2');
Route::get('/dashboard',[AnnouncementController::class,'dashboard'])->name('dashboard')->middleware('isLogedIn');
Route::get('/dash/{dash_id}/editNotice',[AnnouncementController::class,'edit'])->name('dash.edit');
Route::put('/dash/{dash_id}/update',[AnnouncementController::class,'update'])->name('dash.update');
Route::get('/dash/delete/{dash_id}',[AnnouncementController::class,'delete'])->name('dash.delete');
Route::get('/dash/{dash_id}',[AnnouncementController::class,'editAnnounce'])->name('dash.editAnnounce');
Route::put('/dash/{dash_id}/updateA',[AnnouncementController::class,'updateA'])->name('dash.updateA');
Route::get('/dash/deleteAnnounce/{dash_id}',[AnnouncementController::class,'deleteAnnounce'])->name('dash.deleteAnnounce');


Route::get('/acadamic/acadamic',[AcadamicController::class,'acadamic'])->name('acadamic.acadamic')->middleware('isLogedIn');
Route::get('/acadamic/add',[AcadamicController::class,'add'])->name('acadamic.add');
Route::post('/acadamic/store',[AcadamicController::class,'store'])->name('acadamic.store');
Route::get('/acadamic/viewD', [AcadamicController::class, 'viewD'])->name('acadamic.viewD');
Route::get('acadamic/delete/{ac_id}',[AcadamicController::class, 'delete'])->name('acadamic.delete');
Route::get('/support',[AcadamicController::class,'support'])->name('support');


Route::get('/acadamic/chat',[SupportController::class,'chat'])->name('acadamic.chat');
// Route::post('/acadamic/send', [SupportController::class, 'sendMessage'])->name('acadamic.sendMessage');
Route::post('/send-message', [SupportController::class, 'sendMessage'])->name('chat.send');


//user---------------

Route::get('/user/dashboard',[AnnouncementController::class,'dashboardU'])->name('user.dashboardU');
Route::get('/user/staff',[StaffController::class,'staff'])->name('user.staff');
Route::get('/user/search',[StaffController::class,'search'])->name('user.search');
Route::get('/user/academic',[AcadamicController::class,'academic'])->name('user.academic');


