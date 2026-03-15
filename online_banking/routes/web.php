<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\Admin\SessionAdminController;
use App\Http\Controllers\Admin\TransferSendController;
use App\Http\Controllers\SendEmailVerificationNotificationController;
use App\Http\Controllers\User\CardController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RegisteredUserController;
use App\Http\Controllers\User\SessionUserController;
use App\Http\Controllers\User\SecurityPinController;
use App\Http\Controllers\User\SendController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\TransferController;
use App\Http\Controllers\User\UpdateProfileController;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function () {
    Route::get('signup', [RegisteredUserController::class, 'Signup'])->name('user.signup');
    Route::post('signup', [RegisteredUserController::class, 'storeSignup'])->name('user.signup');
    Route::get('signin', [SessionUserController::class, 'Signin'])->name('login');
    Route::post('signin', [SessionUserController::class, 'storeSignin'])->name('user.signin');
    Route::get('suspended-user', [SessionUserController::class, 'suspended'])->name('user.suspended');
});

Route::prefix('user')->middleware('auth')->group(function () {
    Route::prefix('email')->group(function () {
        Route::get('verify', [SendEmailVerificationNotificationController::class, 'sendNotification'])->name('verification.notice');
        Route::get(
            'verify/{id}/{hash}',
            [SendEmailVerificationNotificationController::class, 'verificationRequest']
        )->middleware('signed')->name('verification.verify');
        Route::any(
            'verification-notification',
            [SendEmailVerificationNotificationController::class, 'linkConfirm']
        )->middleware('throttle:6,1')->name('verification.send');
    });

    Route::get('security-pin', [SecurityPinController::class, 'SecurityPin'])->name('user.pin');
    Route::post('security-pin', [SecurityPinController::class, 'storeSecurityPin'])->name('security-pin');
    Route::post('update/security-pin', [UpdateProfileController::class, 'updateSecurityPin'])->name('update.security-pin');
    Route::post('update/password', [UpdateProfileController::class, 'updatePassword'])->name('update.password');
    Route::post('update/profile-photo', [UpdateProfileController::class, 'updateProfilePhoto'])->name('user.update-profile');

    Route::middleware('pin.verified')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'Dashboard'])->middleware('verified')->name('user.dashboard');
    });
    Route::get('transactions', [TransactionController::class, 'Transaction'])->name('user.transactions');
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
    Route::get('card-details/{id}', [CardController::class, 'cardDetails'])->name('user.card-details');
    Route::get('create-virtual-card', [CardController::class, 'addCard'])->name('user.create-card');
    Route::post('create-virtual-card', [CardController::class, 'storeCard'])->name('user.create-card');
    Route::get('freeze-card/{id}', [CardController::class, 'freezeCard'])->name('user.freeze-card');
    Route::post('freeze-card/{id}', [CardController::class, 'updateFreezeCard'])->name('user.freeze-card.update');

    // Logout
    Route::post('logout', [SessionUserController::class, 'destroy'])->name('user.logout');
});

Route::prefix('admin')->group(function () {
    Route::get('v1/access/signup', [RegisteredAdminController::class, 'signup'])->name('admin.signup');
    Route::post('v1/access/signup', [RegisteredAdminController::class, 'storeSignup'])->name('admin.signup');
    Route::get('v1/access/signin', [SessionAdminController::class, 'signin'])->name('admin.signin');
    Route::post('v1/access/signin', [SessionAdminController::class, 'storeSignin'])->name('admin.signin');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('manage/users', [AdminDashboardController::class, 'user'])->name('admin.users');
        Route::post('suspend-user/{id}', [AdminDashboardController::class, 'suspendUser'])->name('admin.users.suspend');
        Route::post('disable-user/{id}', [AdminDashboardController::class, 'disableUser'])->name('admin.users.disable');

        Route::get('suspend-user', [AdminDashboardController::class, 'accountStatus'])->name('admin.suspend');
        Route::get('user-deposit/{id}', [DepositController::class, 'deposit'])->name('admin.user.deposits');
        Route::post('user-deposit/{id}', [DepositController::class, 'storeDeposit'])->name('admin.user.deposits.store');
        Route::get('update/user-deposit/{id}', [DepositController::class, 'updateDeposit'])->name('admin.user.update.deposits');
        Route::post('update/user-deposit/{id}', [DepositController::class, 'storeUpdateDeposit'])->name('admin.user.update.deposits.store');
        Route::get('update/user-transfer/{id}', [TransferSendController::class, 'updateTransfer'])->name('admin.user.transfers');
        Route::post('update/user-transfer/{id}', [TransferSendController::class, 'updateTransferStore'])->name('admin.user.transfers.store');


        // Logout
        Route::post('logout', [SessionAdminController::class, 'destroy'])->name('admin.logout');
    });
});
