<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::view('employee', 'livewire.employee.index');
    Route::view('contrct', 'livewire.contract.index');
});

require __DIR__.'/auth.php';
