<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return session('user_id') ? redirect('/beranda') : redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    session(['user_id' => $user->id, 'user_name' => $user->name]);

    return redirect('/beranda');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }

    session(['user_id' => $user->id, 'user_name' => $user->name]);

    return redirect('/beranda');
});

Route::get('/beranda', function () {
    if (! session('user_id')) {
        return redirect('/login');
    }

    return view('beranda', ['name' => session('user_name')]);
});

Route::get('/logout', function () {
    return view('auth.logout');
});

Route::get('/masuk-anggota', function () {
    return view('masuk-anggota');
});

Route::post('/masuk-anggota', function (Request $request) {
    $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
    ]);

    // Simpan data anggota di session
    session([
        'member_first_name' => $request->first_name,
        'member_last_name' => $request->last_name,
    ]);

    return redirect('/welcome');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/welcome', function () {
    // Jika dari login anggota
    if (session('member_first_name')) {
        $firstName = session('member_first_name');
    }
    else {
        return redirect('/');
    }

    return view('welcome', compact('firstName'));
});

Route::post('/welcome', function (Request $request) {
    // Jika dari daftar anggota baru
    if ($request->has('first_name') && $request->has('last_name')) {
        $firstName = $request->input('first_name');
    }
    else {
        return redirect('/');
    }

    return view('welcome', compact('firstName'));
});
