<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FormBuilderController;

Route::get('form', [FormBuilderController::class, 'view']);
Route::post('form', [FormBuilderController::class, 'postData'])->name('admin.form.postData');
