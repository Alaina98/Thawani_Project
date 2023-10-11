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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::view('/permission', 'permission-list');
Route::view('/user-list', '/user/list-user');
Route::view('/user-view', '/user/view-user');
Route::view('/role-view', 'view-role');
Route::view('/role-list', 'RoleList');
Route::view('/home', 'welcome');
Route::view('/user-login', '/user_pages/login');
Route::view('/user-signup', '/user_pages/sign-up');
Route::view('/reset-psw', '/user_pages/reset-psw');
Route::view('/two-factor', '/user_pages/two-factor');
Route::view('/index-user', '/user_pages/dashboard');

/*______________QA/QC*/
Route::view('/AddTest', '/QA_QC/AddTest');
Route::view('/ViewTestCase', '/QA_QC/ViewTestCase');
Route::view('/TestCase_Details', '/QA_QC/TestCase_Details');
Route::view('/Edit_TestCase', '/QA_QC/Edit_TestCase');



//TestCases
Route::view('/testcase/onholdTest', '/user_pages/onholdTest');
Route::view('/testcase/inprogressTest', '/user_pages/inprogressTest');
Route::view('/testcase/complatesTest', '/user_pages/complatesTest');
Route::view('/testcase/testcasesForm', '/user_pages/testcasesForm');


