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
    return view('auth.login');
});

// Authentication
Auth::routes();

// Users Accounts
Route::get('/home', 'HomeController@index')->name('home');

// Admin
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/insert_todo_list', 'HomeController@admin_insert_todo_list')->middleware('is_admin');
Route::get('admin/designer', 'HomeController@admin_designer')->middleware('is_admin');
Route::get('admin/frontend', 'HomeController@admin_frontend')->middleware('is_admin');
Route::get('admin/backend', 'HomeController@admin_backend')->middleware('is_admin');
Route::get('admin/team_leader', 'HomeController@team_leader')->middleware('is_admin');
Route::post('/todo_list_insert', 'ToDoController@store')->middleware('check_admin');
Route::get('/todo_list_delete/{id}', 'ToDoController@finished_projects')->middleware('check_admin');
Route::post('/admin_command_designer', 'ToDoController@admin_command_designer')->middleware('check_admin');
Route::post('/admin_command_frontend', 'ToDoController@admin_command_frontend')->middleware('check_admin');
Route::post('/admin_command_backend', 'ToDoController@admin_command_backend')->middleware('check_admin');
Route::post('/admin_command_team_leader', 'ToDoController@admin_command_team_leader')->middleware('check_admin');
Route::post('/admin_designer_project_form', 'ToDoController@admin_designer_project_form')->middleware('check_admin');
Route::post('/admin_backend_project_form', 'ToDoController@admin_backend_project_form')->middleware('check_admin');
Route::post('/admin_frontend_project_form', 'ToDoController@admin_frontend_project_form')->middleware('check_admin');
Route::post('/admin_team_leader_project_form', 'ToDoController@admin_team_leader_project_form')->middleware('check_admin');

// Designer
Route::post('/designer_status', 'DesignerController@store');
Route::get('designer/frontend', 'DesignerController@index')->middleware('design');
Route::get('designer/backend', 'DesignerController@backend')->middleware('design');
Route::get('designer/team_leader', 'DesignerController@team_leader')->middleware('design');

// Frontend
Route::post('/frontend_status', 'FrontendController@store')->middleware('frontend');
Route::get('frontend/backend', 'FrontendController@backend')->middleware('frontend');
Route::get('frontend/designer', 'FrontendController@designer')->middleware('frontend');
Route::get('frontend/team_leader', 'FrontendController@team_leader')->middleware('frontend');

// Backend
Route::post('/backend_status', 'BackendController@store')->middleware('backend');
Route::get('backend/designer', 'BackendController@designer')->middleware('backend');
Route::get('backend/frontend', 'BackendController@frontend')->middleware('backend');
Route::get('backend/team_leader', 'BackendController@team_leader')->middleware('backend');

// Team Leader
Route::post('/team_leader_status', 'TeamLeaderController@store')->middleware('team_leader');
Route::get('leader/designer', 'TeamLeaderController@designer')->middleware('team_leader');
Route::get('leader/frontend', 'TeamLeaderController@frontend')->middleware('team_leader');
Route::get('leader/backend', 'TeamLeaderController@backend')->middleware('team_leader');
