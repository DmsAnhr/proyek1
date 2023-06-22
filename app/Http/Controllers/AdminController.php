<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\ShopModel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('admin.home');
    }

    public function dashboard()
    {
        $data = [
            'userCount' => User::where('role', 'user')->count(),
            'prosesCount' => ShopModel::where('status', 'proses')->count(),
            'selesaiCount' => ShopModel::where('status', 'selesai')->count(),
            'totalHargaSelesai' => ShopModel::where('status', 'selesai')->sum('totalHarga'),
            'barangData' => BarangModel::with('kategori')->take(3)->get(),
            'berlangsungData' => ShopModel::where('status', 'berlangsung')->take(6)->get(),
        ];

        return response()->json($data);
    }
}
