<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view('employee', 'livewire.employee.index');
    Route::view('contrct', 'livewire.contract.index');
    Route::view('school', 'livewire.school.index');
    Route::view('department', 'livewire.department.index');
});

require __DIR__.'/auth.php';
