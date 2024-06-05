<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdminRole;
use App\Http\Middleware\CheckStaffRole;
use App\Http\Middleware\CheckUserRole;
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(CheckAdminRole::class)->group(function () {
Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin');
Route::resource('booking', BookingController::class);
Route::resource('vehicle', VehicleController::class);
});
Route::middleware(CheckStaffRole::class)->group(function () {
Route::get('/staff', [AdminController::class, 'staffIndex'])->name('staff');
});
Route::middleware(CheckUserRole::class)->group(function () {
Route::get('/user', [AdminController::class, 'userIndex'])->name('user');
});
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// // Route::middleware(['auth', 'verified'])->group(function () {
// //     Route::get('/dashboard', function () {
// //         return view('admin.dashboard');
// //     })->name('dashboard')->middleware('role:admin');
// // });
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin.dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
    
//     Route::get('/user', function () {
//         return view('user.dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
//     Route::get('/staff', function () {
//         return view('staff.dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });
    
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\TicketController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\CheckAdminRole;
// use App\Http\Middleware\CheckStaffRole;
// use App\Http\Middleware\CheckUserRole;


// Route::get('/', function () {
//         return view('welcome');
//     })->name('home');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::middleware(CheckAdminRole::class)->group(function () {
//     Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin');
// });
// Route::middleware(CheckStaffRole::class)->group(function () {
//     Route::get('/staff', [AdminController::class, 'staffIndex'])->name('staff');
// });
// Route::middleware(CheckUserRole::class)->group(function () {
//     Route::get('/user', [AdminController::class, 'userIndex'])->name('user');
// });


Route::get('/tickets', [TicketController::class, 'showindex'])->name('tickets.showindex');
  Route::resource('tickets.showindex', TicketController::class);
require __DIR__.'/auth.php';




  