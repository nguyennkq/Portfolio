<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/','HomeMain')->name('home');
});


//
Route::controller(AboutController::class)->group(function(){
    Route::get('/admin/about', 'AdminAbout')->name('admin.about');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/home/about', 'HomeAbout')->name('home.about');

});

Route::controller(SkillController::class)->group(function(){
    Route::get('/admin/skill', 'AdminSkill')->name('admin.skill');

    Route::get('/add/skill', 'AddSkill')->name('add.skill');
    Route::post('/store/skill', 'StoreSkill')->name('store.skill');

    Route::get('/edit/skill/{id}', 'EditSkill')->name('edit.skill');
    Route::post('/update/skill/{id}', 'UpdateSkill')->name('update.skill');

    Route::get('/delete/skill/{id}', 'DeleteSkill')->name('delete.skill');

    Route::get('/home/skill', 'HomeSkill')->name('home.skill');

});





Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
