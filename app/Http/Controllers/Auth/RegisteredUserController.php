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
<<<<<<< HEAD
use Exception;
=======
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373

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
<<<<<<< HEAD
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
=======
        $request->validate([
            'nip' => ['required', 'string', 'max:7', 'unique:karyawan'],
            'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => '2',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    }
}
