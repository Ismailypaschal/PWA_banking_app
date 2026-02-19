<?php

use App\Http\Controllers\User\CardController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RegisteredUserController;
use App\Http\Controllers\User\SessionUserController;
use App\Http\Controllers\User\SecurityPinController;
use App\Http\Controllers\User\SendController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\TransferController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::get('signup', [RegisteredUserController::class, 'Signup'])->name('user.signup');
    Route::post('signup', [RegisteredUserController::class, 'storeSignup'])->name('user.signup');
    Route::get('signin', [SessionUserController::class, 'Signin'])->name('user.signin');
    Route::post('signin', [SessionUserController::class, 'storeSignin'])->name('user.signin');
});

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('security-pin', [SecurityPinController::class, 'SecurityPin'])->name('user.pin');
    Route::post('security-pin', [SecurityPinController::class, 'storeSecurityPin'])->name('security-pin');
    Route::middleware('pin.verified')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'Dashboard'])->middleware('verified')->name('user.dashboard');
    });
    Route::get('transactions', [TransactionController::class, 'Transaction'])->name('user.transaction');
    Route::get('deposit', [DashboardController::class, 'Deposit'])->name('user.deposit');
    Route::get('transfer', [DashboardController::class, 'Transfer'])->name('user.transfer');
    Route::post('transfer', [TransferController::class, 'storeTransfer'])->name('user.transfer');
    Route::get('send', [DashboardController::class, 'Send'])->name('user.send');
    Route::post('send', [SendController::class, 'storeSend'])->name('user.send');
    Route::get('account-details', [DashboardController::class, 'Account'])->name('user.account-details');
    Route::get('receipt', [DashboardController::class, 'Receipt'])->name('user.receipt');


    Route::get('profile', [DashboardController::class, 'Profile'])->name('user.profile');
    Route::get('support', [DashboardController::class, 'Support'])->name('user.support');
    Route::get('card', [CardController::class, 'Card'])->name('user.card');
    Route::get('create-virtual-card', [CardController::class, 'addCard'])->name('user.create-card');
    Route::post('create-virtual-card', [CardController::class, 'storeCard'])->name('user.create-card');
});
