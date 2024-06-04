<?php

use App\Http\Controllers\AdminController;


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('role:admin');

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin');
    
    Route::get('/user', function () {
        return view('user.dashboard');
    })->middleware(['auth', 'verified'])->name('user.dashboard'); 
    
    Route::get('/staff', function () {
        return view('staff.dashboard');
    })->middleware(['auth', 'verified'])->name('staff.dashboard');
});

// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->middleware(['auth'])->name('logout');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('home');
    })->middleware(['auth'])->name('logout');


// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TicketController;
// use App\Http\Middleware;
// use App\Models\route as ModelsRoute;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');





// // Route::middleware(['auth', 'verified'])->group(function () {
// //     Route::get('/dashboard', function () {
// //         return view('admin.dashboard');
// //     })->name('dashboard')->middleware('role:admin');
// // });
// // Route::middleware(['auth', 'verified'])->group(function () {
// //     Route::get('/admin', function () {
// //         return view('admin.dashboard');
// //     })->middleware(['auth', 'verified'])->name('dashboard');
    
// //     // Route::get('/user', function () {
// //     //     return view('user.dashboard');
// //     // })->middleware(['auth', 'verified'])->name('dashboard'); 
// //     // Route::get('/staff', function () {
// //     //     return view('staff.dashboard');
// //     // })->middleware(['auth', 'verified'])->name('dashboard');
// // });
    

    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('home')->middleware('role:staff');
    // Route::get('/user',[AdminController::class, 'user'])->name('user');
    // Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
    // Route::get('/staff',[AdminController::class, 'staff'])->name('staff');
    

Route::get('/tickets', [TicketController::class, 'showindex'])->name('tickets.showindex');

// Route::resource('tickets', TicketController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::middleware(CheckAdminRole::class)->group(function () {
//     Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    
// });

//this file AdminLayout.php 
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');
    
//     Route::get('/users', function () {
//         return view('admin.users');
//     })->name('users');
// });

require __DIR__.'/auth.php';
