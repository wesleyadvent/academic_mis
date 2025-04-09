<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Exception;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            // Validasi input
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
//                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
                'nip' => ['required', 'string', 'lowercase', 'max:7', 'unique:karyawan,nip'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // Buat user baru
            $user = User::create([
                'name' => $request->name,
                'nip' => $request->nip,
//                'email' => $request->email,
                'role_id' => '1',
                'password' => Hash::make($request->password),
            ]);

            // Trigger event registrasi
            event(new Registered($user));

            // Login user setelah registrasi
            Auth::login($user);

            return redirect(route('dashboard', absolute: false))->with('success', 'Registrasi berhasil!');
        } catch (Exception $e) {
            // Dump and die untuk debugging
            return dd($e);
        }
    }
}
