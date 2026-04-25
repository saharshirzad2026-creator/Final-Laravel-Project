<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth','verified'])->group(function(){
    Route::get("dashboard", "dashboard")->name("dashboard");
    Route::prefix("school")->name("schools.")->group(function(){
        Route::get("/", Index::class)->name("index");
        Route::get("/add", Add::class)->name("add");
        Route::get("{id}/edit", Edit::class)->name("edit");
    });

    Route::prefix("department")->name("deaprtment.")->group(function(){
        Route::get("/", Index::class)->name("index");
        Route::get("/add", Add::class)->name("add");
        Route::get("{id}/edit", Edit::class)->name("edit");
    });
});

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth', 'verified'])->name('profile');
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view('employee', 'livewire.employee.index');
    Route::view('contract', 'livewire.contract.index');
    Route::get('school', []);
    Route::view('department', 'livewire.department.index');
    Route::view('designation', 'livewire.designation.index');
    Route::view('salary', 'livewire.salary.index');
    Route::view('payment', 'livewire.payment.index');
    Route::view('payroll', 'livewire.payroll.index');
});

require __DIR__.'/auth.php';
