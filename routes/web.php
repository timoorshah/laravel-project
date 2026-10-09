<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
// Route::get('/auth/login', function () {
//     return view('auth.login');
// })
Route::resource('students', StudentController::class);