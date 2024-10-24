<?php

use App\Livewire\Admin\Home as AdminHome;
use App\Livewire\User\Home as UserHome;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    Route::get('/', Login::class)->name('login');
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', UserHome::class)->name('user.home');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin/home', AdminHome::class)->name('admin.home');
});
