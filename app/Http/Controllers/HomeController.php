<?php

namespace App\Http\Controllers;

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

    public function userData($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}
