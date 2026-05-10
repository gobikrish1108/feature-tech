<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\SectionEditor;
use App\Livewire\HomePage;

Route::get('/', HomePage::class)->name('home');

Route::get('/admin/login', Login::class)->name('admin.login');
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', fn () => redirect()->route('admin.dashboard'))->name('admin');
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/sections/{section}', SectionEditor::class)->name('admin.sections.edit');
});
