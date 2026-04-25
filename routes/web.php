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
        Route::get("/", DepartmentIndex::class)->name("index");
        Route::get("/add", DepartmentAdd::class)->name("add");
        Route::get("{id}/edit", DepartmentEdit::class)->name("edit");
    });

    Route::prefix("designations")->name("designations.")->group(function(){
        Route::get("/", DesignationsIndex::class)->name("index");
        Route::get("/add", DesignationsAdd::class)->name("add");
        Route::get("{id}/edit", DesignationsEdit::class)->name("edit");
    });

    Route::prefix("employees")->name("employees.")->group(function(){
        Route::get("/", EmployeeIndex::class)->name("index");
        Route::get("/add", EmployeeAdd::class)->name("add");
        Route::get("{id}/edit", EmployeeEdit::class)->name("edit");
    });

    Route::prefix("contract")->name("contract.")->group(function(){
        Route::get("/", ContractIndex::class)->name("index");
        Route::get("/add", ContractAdd::class)->name("add");
        Route::get("{id}/edit", ContractEdit::class)->name("edit");
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
