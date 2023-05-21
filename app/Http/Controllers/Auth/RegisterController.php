<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('layout.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'username' => ['required', 'string', 'max:255', 'unique:users'],
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'max:255'],
        //     'password' => ['required', 'string', 'min:3'],
        // ]);

        // $hashedPassword = Hash::make($request->input('password'));
        // User::create([
        //     'username' => $request->input('username'),
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => $hashedPassword,
        // ]);

        // return redirect('login')->with('success', 'User Berhasil Ditambahkan');


        // Validasi input
        // $request->validate([
        //     'username' => ['required', 'string', 'max:255', 'unique:users'],
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'max:255'],
        //     'password' => ['required', 'string', 'min:3'],
        // ]);

        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        // Buat pengguna baru
        $hashedPassword = Hash::make($request->input('password'));
        $user = User::create([
                'username' => $request->input('username'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $hashedPassword,
        ]);

        // Login pengguna baru
        Auth::login($user);

        // Registrasi berhasil
        // return response()->json(['success' => true]);
        return redirect('login')->with('success', 'User Berhasil Ditambahkan');

    }
}
