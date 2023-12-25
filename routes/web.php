<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('home', [
        'title' => 'Beranda',
        'active' => 'Home',
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
    ]);
})->middleware('guest')->name('login');

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register',
    ]);
})->middleware('guest')->name('register');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);

})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
    // return 'berhasil kirim';
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(

        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);

})->middleware('guest')->name('password.update');


Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/register', [UserController::class, 'insert'])->middleware('guest')->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');

Route::get('/siswa',[SiswaController::class, 'index']);
Route::post('/siswa/create', [SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);

// Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
// Route::post('/email/verification-notification', [VerificationController::class, 'resend'])->name('verification.resend');

// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/admin/event', function () {
//         return view('dashboard.event', [
//             'events' => auth()->user()->event,
//         ]);
//     })->name('dashboard');

   
//     Route::get('admin/users', [AdminController::class, 'index']);

//     Route::get('/admin/users/add/', [AdminController::class, 'addUser']);
//     Route::post('/admin/users/add/', [AdminController::class, 'addUserSubmit']);

//     Route::get('/admin/users/edit/{user:id}', [AdminController::class, 'editUser']);
//     Route::post('/admin/users/edit/{user:id}', [AdminController::class, 'editUserSubmit']);

//     Route::get('/admin/users/delete/{user:id}', [AdminController::class, 'deleteUser']);
// });
