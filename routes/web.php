<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\MovieController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\User\SubscriptionPlanController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
// Midtrans Route
Route::post('midtrans/notification', [SubscriptionPlanController::class, 'midtransCallback']);

Route::redirect('/', '/login');

Route::middleware(['auth', 'role:user'])->prefix('dashboard')->name('user.dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie.show')->middleware('checkUserSubscription:true');

    Route::get('subscription-plan', [SubscriptionPlanController::class, 'index'])->name('subscriptionPlan.index')->middleware('checkUserSubscription:false');
    Route::post('subscription-plan/{subscriptionPlan}/user-subscribe', [SubscriptionPlanController::class, 'userSubscribe'])->name('subscriptionPlan.userSubscribe')->middleware('checkUserSubscription:false');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.dashboard.')->group(function () {
    Route::put('movie/{movie}/restore', [AdminMovieController::class, 'restore'])->name('movie.restore');
    Route::resource('movie', AdminMovieController::class);
});

Route::prefix('prototype')->name('prototype.')->group(function() {
    Route::get('/login', function(){
        return Inertia::render('Prototype/Login');
    })->name('login');
    Route::get('/register', function(){
        return Inertia::render('Prototype/Register');
    })->name('register');
    Route::get('/dashboard', function(){
        return Inertia::render('Prototype/Dashboard');
    })->name('dashboard');
    Route::get('/subscriptionPlan', function(){
        return Inertia::render('Prototype/SubscriptionPlan');
    })->name('subscriptionPlan');
    Route::get('/movie/{slug}', function(){
        return Inertia::render('Prototype/Movie/Show');
    })->name('movie.show');
});

require __DIR__.'/auth.php';
