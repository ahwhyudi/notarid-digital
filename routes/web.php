<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

route::get('/', [IndexController::class, 'index'])->name('components.index');
route::get('/report', [DashboardController::class, 'report'])->name('components.admin.dashboard');
route::get('/dashboard/divisi/{id}', [DashboardController::class, 'show'])->name('detail-user.rekap-detail-user');
route::post('/import', [DashboardController::class, 'import'])->name('dashboard.import');
route::delete('/delete', [DashboardController::class, 'delete'])->name('dashboard.delete');
