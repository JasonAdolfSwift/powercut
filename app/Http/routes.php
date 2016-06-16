<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',  'HomePageController@start');
Route::get('/showPlan',  'ShowPlanController@index');
Route::get('/register',  'HomePageController@register');
Route::get('/alterPassword', 'HomePageController@showAlterPassword');
Route::get('/getApplies', 'ApplyManageController@getApplies');
Route::get('/firstApproval', 'ShowPlanController@firstApproval');
Route::get('/getApprovalUser', 'UserManageController@getApprovalUser');
Route::get('/getSubmitPlan', 'ShowPlanController@getSubmitPlan');
Route::get('/getFinalApproval', 'ShowPlanController@getFinalApproval');
Route::get('/getNotify', 'ShowPlanController@getNotify');
Route::get('/permissionManage', 'HomePageController@permissionManage');
Route::get('/selection','HomePageController@selection');
Route::get('/queryPowCutRecord', "HomePageController@queryPowCutRecord");
Route::get('/showWorkFlow', "HomePageController@showWorkFlow");

Route::post('/login',  'UserManageController@login');
Route::post('/register/create', 'UserManageController@createUser');
Route::post('/alterPassword/alter', 'UserManageController@alterPassword');
Route::post('/alterUserPermission', 'UserManageController@alterUserPermission');

Route::get('/showSaved', 'ApplyManageController@showSaved');
Route::get('/apply/showAccepted', 'ApplyManageController@showAccepted');
Route::get('/apply/showSecondSaved', 'ApplyManageController@showSecondSaved');
Route::get('/apply/showApproved', 'ApplyManageController@showApproved');
Route::get('/getUserByDepartment', 'UserManageController@getUserByDepartment');
Route::get('/apply/queryByPlaceOrTime', 'ApplyManageController@queryByPlaceOrTime');
Route::get('/getAllUser', 'UserManageController@getAllUser');

Route::post('/apply/addApply', 'ApplyManageController@addApply');
Route::post('/apply/saveApply', 'ApplyManageController@saveApply');
Route::post('/apply/alterApply', 'ApplyManageController@updateApply');
Route::post('/apply/deleteApply', 'ApplyManageController@deleteApply');
Route::post('/apply/alterSavedApply', 'ApplyManageController@alterSavedApply');
Route::post('/apply/firstApprovalApply', 'ApplyManageController@firstApprovalApply');
Route::post('/apply/alterAcceptedApply', 'ApplyManageController@alterAcceptedApply');
Route::post('/apply/submitApply', 'ApplyManageController@submitApply');
Route::post('/apply/deleteSubmitedAppply', 'ApplyManageController@deleteSubmitedAppply');
Route::post('/apply/finalApproval', 'ApplyManageController@finalApproval');
Route::post('/apply/setNotify', 'ApplyManageController@setNotify');

Route::get('/test', 'HomePageController@test');