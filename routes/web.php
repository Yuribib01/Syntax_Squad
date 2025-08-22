<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', [MemberController::class, 'index'])->name('home');
Route::get('/member/{slug}', [MemberController::class, 'show'])->name('member.show');

