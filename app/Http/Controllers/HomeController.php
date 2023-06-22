<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = KategoriModel::all();
        $home = BarangModel::orderBy('updated_at', 'desc')->paginate(5);
        return view('user.home')
            ->with('home', $home)
            ->with('kategori', $kategori);
    }

    public function userData()
    {
        $user = Auth::user();
        $user = User::find($user->id);
        return response()->json($user);
    }

    public function updateUser(Request $request,)
    {
        $user = Auth::user();
        // Mengambil data dari request
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $noTelp = $request->input('noTelp');
        $alamat = $request->input('alamat');
        $kecamatan = $request->input('kecamatan');
        $kodepos = $request->input('kodepos');

        // Lakukan validasi input di sini (sesuai kebutuhan)

        // Lakukan update data user ke dalam database
        $user = User::find($user->id); // Ganti $userId dengan ID user yang ingin diupdate
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->noTelp = $noTelp;
        $user->alamat = $alamat;
        $user->kecamatan = $kecamatan;
        $user->kodepos = $kodepos;
        $user->save();

        // Mengirim respon ke client
        return response()->json(['message' => 'User data updated successfully']);
    }
}
