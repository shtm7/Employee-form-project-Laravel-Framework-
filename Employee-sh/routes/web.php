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
//Route::get('/', function () {
    //return view('welcome');
//});
//Route::get('/employees', function () {
  //$employee = \App\Models\Employee::create([
   // 'employee_name'=>'Shahad',
    //'employee_id'=> '0112',
    //'phone_number'=> '0500000000',
    //'city'=>'Riyadh',
    //'gender'=>'Female'
   //]);
   //$employees = \App\Models\Employee::all();
   //$employee = \App\Models\Employee::findOrFail(1);
   //$employee = \App\Models\Employee::where('employee_name','Shahad')->get();
  // $employee->update([
   //    'phone_number'=>'0501010101'
   //]);
  // $employees = $this->employees->select('employee_name','employee_id');
   //$employee->delete();
   //$employees = $this->employees->select('employee_name','employee_id'); 
   //$employee->store('employees.employeeForme');
//return view('/index', compact('employees'));
//});
Route::post('/employees/destroy/{id}','EmployeeController@destroy');
Route::get('/employees/search','EmployeeController@search');
Route::get('/employees/create','EmployeeController@create');
Route::post('/employees/store','EmployeeController@store');
Route::get('/employees/master','EmployeeController@master');
//Route::get('/search', function()
//{
  //$employees = \app\Models\employee::all();
  //return view('employees.master',compact('employees'));
//});
//Route::resource('/employees','EmployeeController');
