<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\ShopModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriModel::all();
        $barang = BarangModel::all();
        return view('user.shop')
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'alamat' => 'required',
            'tanggal_start' => 'required',
            'tanggal_finish' => 'required',
            'barangs.*.id' => 'required',
            'barangs.*.jumlah' => 'required',
        ]);

        // Simpan transaksi ke database
        $transaksi = ShopModel::create([
            'id_user' => $request->id_user,
            'alamat' => $request->alamat,
            'tanggal_start' => $request->tanggal_start,
            'tanggal_finish' => $request->tanggal_finish,
        ]);

        $totalHarga = 0;

        // Simpan data transaksi barang ke dalam tabel pivot dan hitung total harga
        foreach ($request->barangs as $barang) {
            $barangModel = BarangModel::find($barang['id']);
            $jumlahBarang = $barang['jumlah'];
            $hargaBarang = $barangModel->harga;

            $transaksi->barangs()->attach($barangModel, [
                'jumlah' => $jumlahBarang,
                'harga' => $hargaBarang,
            ]);

            $totalHarga += $jumlahBarang * $hargaBarang;

            // Mengurangi jumlah barang yang tersedia
            $barangModel->decrement('jumlah', $jumlahBarang);
        }

        // Simpan total harga transaksi
        $transaksi->total_harga = $totalHarga;
        $transaksi->save();

        return response()->json(['message' => 'Transaksi berhasil disimpan.']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(ShopModel $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopModel $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopModel $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopModel $shop)
    {
        //
    }
}
