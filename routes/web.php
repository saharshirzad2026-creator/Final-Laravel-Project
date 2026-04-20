<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth', 'verified'])->name('profile');
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view('employee', 'livewire.employee.index');
    Route::view('contrct', 'livewire.contract.index');
    Route::view('school', 'livewire.school.index');
    Route::view('department', 'livewire.department.index');
    Route::view('designation', 'livewire.designation.index');
    Route::view('salary', 'livewire.salary.index');
    Route::view('payment', 'livewire.payment.index');
    Route::view('payroll', 'livewire.payroll.index');
});

require __DIR__.'/auth.php';
