<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home.index');
});

//navbar
Route::get('/',[HomeController::class,'index']);
//Route::get('/index',[HomeController::class,'index']);
Route::get('/about_us',[HomeController::class,'about_us']);
Route::get('/courses',[HomeController::class,'courses']);
Route::get('/governors',[HomeController::class,'governors']);
Route::get('/directors',[HomeController::class,'directors']);
Route::get('/coporate',[HomeController::class,'coporate']);
Route::get('/lecture_Panel',[HomeController::class,'lecture_Panel']);
Route::get('/coporate_team',[HomeController::class,'coporate_team']);
Route::get('/educational',[HomeController::class,'educational']);
Route::get('/clients',[HomeController::class,'clients']);
Route::get('/events_CBL',[HomeController::class,'events_CBL']);
Route::get('/events_EWCL',[HomeController::class,'events_EWCL']);
Route::get('/events_EWCL_2018',[HomeController::class,'events_EWCL_2018']);
Route::get('/gallery_CBL',[HomeController::class,'gallery_CBL']);
Route::get('/gallery_EWCL',[HomeController::class,'gallery_EWCL']);
Route::get('/gallery_EWCL_2018',[HomeController::class,'gallery_EWCL_2018']);
Route::get('/register',[HomeController::class,'register']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/consultancy',[HomeController::class,'consultancy']);

//courses
Route::get('/management',[HomeController::class,'management']);
Route::get('/ICT',[HomeController::class,'ICT']);
Route::get('/languages',[HomeController::class,'languages']);
Route::get('/social',[HomeController::class,'social']);
Route::get('/business',[HomeController::class,'business']);

//programs
//management
Route::get('/sales',[HomeController::class,'sales']);
Route::get('/core',[HomeController::class,'core']);
Route::get('/fbusiness',[HomeController::class,'fbusiness']);
Route::get('/PD',[HomeController::class,'PD']);
Route::get('/csales',[HomeController::class,'csales']);
Route::get('/HDbusiness',[HomeController::class,'HDbusiness']);
Route::get('/taxation',[HomeController::class,'taxation']);
Route::get('/minimba',[HomeController::class,'minimba']);
Route::get('/finance',[HomeController::class,'finance']);
Route::get('/solid',[HomeController::class,'solid']);
Route::get('/trade',[HomeController::class,'trade']);
Route::get('/trade_main',[HomeController::class,'trade_main']);
Route::get('/qualifi_7',[HomeController::class,'qualifi_7']);
Route::get('/d_trade',[HomeController::class,'d_trade']);
Route::get('/practical',[HomeController::class,'practical']);
Route::get('/effective',[HomeController::class,'effective']);

//IT
Route::get('/advanced',[HomeController::class,'advanced']);
Route::get('/certificate',[HomeController::class,'certificate']);
Route::get('/digital',[HomeController::class,'digital']);
Route::get('/diploma',[HomeController::class,'diploma']);
Route::get('/graphic',[HomeController::class,'graphic']);

//languages
Route::get('/benglish',[HomeController::class,'benglish']);
Route::get('/ielts',[HomeController::class,'ielts']);
Route::get('/penglish',[HomeController::class,'penglish']);
Route::get('/pte',[HomeController::class,'pte']);
Route::get('/public_english',[HomeController::class,'public_english']);
Route::get('/toefl',[HomeController::class,'toefl']);

//social
Route::get('/care',[HomeController::class,'care']);
Route::get('/drugs',[HomeController::class,'drugs']);
Route::get('/mental',[HomeController::class,'mental']);
Route::get('/pedagogy',[HomeController::class,'pedagogy']);
Route::get('/sports',[HomeController::class,'sports']);

//admission
Route::post('/add_admission',[HomeController::class,'add_admission']);
Route::post('/send_message',[HomeController::class,'send_message']);