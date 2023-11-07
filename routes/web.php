<?php

use App\Http\Controllers\AgentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\PropertyFeatureController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PropertiesController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'CheckUserRole:admin'])->prefix('admin')->group(function () {
 
});

Route::prefix('property-type')->controller(PropertyTypeController::class)->group(function(){
    Route::get('create','Create');
    Route::get('index','Index')->name('property-type.index');
    Route::post('store','Store')->name('store');
    Route::get('edit/{id}','Edit')->name('property-type.edit');
    Route::put('update/{id}','Update')->name('property-type.update');
    Route::delete('destroy/{id}','Destroy')->name('destroy');
});

Route::prefix('property-feature')->controller(PropertyFeatureController::class)->group(function(){
    Route::get('create','Create');
    Route::get('index','Index')->name('property-feature.index');
    Route::post('store','Store')->name('store');
    Route::get('edit/{id}','Edit')->name('property-feature.edit');
    Route::put('update/{id}','Update')->name('property-feature.update');
    Route::delete('destroy/{id}','Destroy')->name('destroy');
});

Route::prefix('lead')->controller(LeadsController::class)->group(function(){
    Route::get('index','Index')->name('lead.index');
    Route::post('store','Store')->name('lead.store');
    Route::get('update','Update')->name('lead.update');
    Route::delete('destroy/{id}','Destroy')->name('lead.destroy');
});

Route::resource('agent',AgentsController::class);

Route::prefix('property')->controller(PropertiesController::class)->group(function(){
    Route::get('create','Create');
    Route::get('index','Index')->name('property.index');
    Route::post('store','Store')->name('store');
    Route::get('edit/{id}','Edit')->name('property.edit');
    Route::put('update/{id}','Update')->name('property.update');
    Route::delete('destroy/{id}','Destroy')->name('destroy');
});