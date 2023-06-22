<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\CartModel;
use App\Models\ShopModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $cartItems = CartModel::with('barang')->where('user_id', $user->id)->get();
        return response()->json([
            'user' => $user,
            'cartItems' => $cartItems
        ]);
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
        // Validasi input
        $request->validate([
            'id_user' => 'required',
            'kode_transaksi' => 'required',
            'namaPeminjam' => 'required',
            'alamat' => 'required',
            'totalHarga' => 'required',
            'lama_sewa' => 'required',
            'payment' => 'required',
            'shipping' => 'required',
            'tanggalStart' => 'required',
            'status' => 'required',
            'barangs' => 'required|array',
            'barangs.*.id' => 'required',
            'barangs.*.jumlah' => 'required|integer|min:1',
        ]);

        // Ambil data dari request
        $idUser        = $request->input('id_user');
        $kodeTransaksi = $request->input('kode_transaksi');
        $namaPeminjam  = $request->input('namaPeminjam');
        $alamat        = $request->input('alamat');
        $totalHarga    = $request->input('totalHarga');
        $lama_sewa     = $request->input('lama_sewa');
        $payment       = $request->input('payment');
        $shipping      = $request->input('shipping');
        $tanggalStart  = $request->input('tanggalStart');
        $status        = $request->input('status');
        $barangs       = $request->input('barangs');

        // Simpan data transaksi
        $transaksi = new ShopModel();
        $transaksi->id_user = $idUser;
        $transaksi->kode_transaksi = $kodeTransaksi;
        $transaksi->namaPeminjam = $namaPeminjam;
        $transaksi->alamat = $alamat;
        $transaksi->totalHarga = $totalHarga;
        $transaksi->lama_sewa = $lama_sewa;
        $transaksi->payment = $payment;
        $transaksi->shipping = $shipping;
        $transaksi->tanggal_start = $tanggalStart;
        $transaksi->status = $status;
        // Setel tanggal_finish sesuai kebutuhan

        CartModel::where('user_id', $idUser)->delete();
        $transaksi->save();

        // Simpan data barang untuk transaksi     
        foreach ($barangs as $barang) {
            $barangModel = BarangModel::find($barang['id']);
            if ($barangModel) {
                $transaksi->barangs()->attach($barangModel->id, ['jumlah' => $barang['jumlah']]);
                $barangModel->jumlah -= $barang['jumlah'];
                $barangModel->save();
            }
        }


        return response()->json(['message' => 'Transaksi berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
