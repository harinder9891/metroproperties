<?php

use App\Http\Controllers\AgentsController;
use App\Http\Controllers\LandingPagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\PropertyFeatureController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\TagsController;

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
    return view('frontend.home');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'CheckUserRole:admin'])->prefix('admin')->group(function () {
 
});

Route::middleware(['auth'])->group(function () {
 
    Route::prefix('property-type')->controller(PropertyTypeController::class)->group(function(){
        Route::get('create','Create');
        Route::get('index','Index')->name('property-type.index');
        Route::post('store','Store')->name('store');
        Route::get('edit/{id}','Edit')->name('property-type.edit');
        Route::put('update/{id}','Update')->name('property-type.update');
        Route::delete('destroy/{id}','Destroy')->name('destroy');
    });
    
    Route::prefix('tag')->controller(TagsController::class)->group(function(){
        Route::get('create','Create')->name('tag.create');
        Route::get('index','Index')->name('tag.index');
        Route::post('store','Store')->name('tag.store');
        Route::get('edit/{id}','Edit')->name('tag.edit');
        Route::put('update/{id}','Update')->name('tag.update');
        Route::delete('destroy/{id}','Destroy')->name('tag.destroy');
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
        Route::get('create','Create')->name('lead.create');
        Route::get('filter','Filter')->name('lead.filter');
        Route::get('update','Update')->name('lead.update');
        Route::get('assign','LeadAssign')->name('lead.assign');
        Route::post('comment','AddLeadFeedback')->name('lead.comment');
        Route::get('comments','GetLeadsFeedBacks')->name('lead.comments');
        Route::delete('destroy/{id}','Destroy')->name('lead.destroy');
    });
    
    Route::resource('agent',AgentsController::class);
    
    Route::prefix('property')->controller(PropertiesController::class)->group(function(){
        Route::get('create','Create')->name('property.create');
        Route::get('index','Index')->name('property.index');
        Route::get('images/{id}','Images')->name('property.images');
        Route::put('updateimages/{id}','UpdateImage')->name('property.updateimage');
        Route::post('newimage','AddNewImage')->name('property.newimage');
        Route::get('editimage/{id}','ImageEdit')->name('property.editimage');
        Route::delete('destroyimage/{id}','DeleteImage')->name('property.destroyimage');
        Route::get('propertyfilter','PropertyFilter')->name('property.propertyfilter');
        Route::get('config/{id}','Configurations')->name('property.config');
        Route::post('store','Store')->name('property.store');
        Route::delete('removeconfig/{id}','RemoveApartmentConfig')->name('property.removeconfig');
        Route::post('newapartmentconfig','AddNewApartmentConfig')->name('property.newapartmentconfig');
        Route::get('detail/{id}','PropertyDetail')->name('property.detail');
        Route::get('edit/{id}','Edit')->name('property.edit');
        Route::put('update/{id}','Update')->name('property.update');
        Route::delete('destroy/{id}','Destroy')->name('property.destroy');
    });
});
Route::post('lead/store',[LeadsController::class,'Store'])->name('lead.store');

Route::get('landing-page-1',[LandingPagesController::class,'November9']);