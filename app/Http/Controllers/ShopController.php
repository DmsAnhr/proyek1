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
        $transaksi = ShopModel::all();
        $kategori = KategoriModel::all();
        $barang = BarangModel::all();
        return view('user.shop')
            ->with('transaksi', $transaksi)
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    public function indexAdmin()
    {
        $transaksi = ShopModel::all();
        $kategori = KategoriModel::all();
        $barang = BarangModel::all();
        return view('admin.penyewaan')
            ->with('transaksi', $transaksi)
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    public function indexRiwayat()
    {
        $transaksi = ShopModel::all();
        $kategori = KategoriModel::all();
        $barang = BarangModel::all();
        return view('admin.riwayat')
            ->with('transaksi', $transaksi)
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    public function getDataBarang()
    {
        $barang = BarangModel::where('status', 'tersedia')->with('kategori')->get();
        $kategori = KategoriModel::withCount('barang')->get();
        return response()->json(['barang' => $barang, 'kategori' => $kategori]);
    }

    public function getData()
    {
        $transaksi = ShopModel::where('status', 'Berlangsung')->get();
        return response()->json(['data' => $transaksi]);
    }

    public function getDataNew($status)
    {
        $transaksiData = ShopModel::with('barang')->where('status', $status)->get();
        $barangData = BarangModel::all();

        $response = [];
        foreach ($transaksiData as $transaksi) {
            $barangIds = $transaksi->barang ? $transaksi->barang->pluck('id')->toArray() : [];
            $barangs = [];

            foreach ($barangIds as $barangId) {
                $barang = $barangData->where('id', $barangId)->first();
                if ($barang) {
                    $jumlahBarang = $transaksi->barang->where('id', $barangId)->count();
                    $barangs[] = [
                        'id' => $barang->id,
                        'nama_barang' => $barang->nama,
                        'harga_barang' => $barang->harga,
                        'jumlah_barang' => $jumlahBarang,
                        // tambahkan kolom data barang lainnya yang ingin ditampilkan
                    ];
                }
            }

            $response[] = [
                'id' => $transaksi->id,
                'kode_transaksi' => $transaksi->kode_transaksi,
                'namaPeminjam' => $transaksi->namaPeminjam,
                'alamat' => $transaksi->alamat,
                'tanggal_start' => $transaksi->tanggal_start,
                'tanggal_finish' => $transaksi->tanggal_finish,
                'totalHarga' => $transaksi->totalHarga,
                'status' => $transaksi->status,
                'lama_sewa' => $transaksi->lama_sewa,
                'shipping' => $transaksi->shipping,
                'payment' => $transaksi->payment,
                'denda' => $transaksi->denda,
                'terlambat' => $transaksi->terlambat,
                'barang' => $barangs,
            ];
        }

        return response()->json(['data' => $response]);
    }




    public function getProduct($id)
    {
        $barang = BarangModel::find($id);
        return response()->json($barang);
    }

    public function getBarangId($id)
    {
        $kategori = KategoriModel::all();
        $barang = BarangModel::where('id', $id)->first();
        $barangAll = BarangModel::all();

        return view('user.single_shop', ['id' => $id])
            ->with('barang', $barang)
            ->with('barangAll', $barangAll)
            ->with('kategori', $kategori);
    }

    public function getRiwayat()
    {
        $transaksi = ShopModel::whereNotNull('tanggal_finish')->get();
        return response()->json(['data' => $transaksi]);
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
            'kode_transaksi' => 'required',
            'id_user' => 'required',
            'alamat' => 'required',
            'namaPeminjam' => 'required',
            'totalHarga' => 'required',
            'tanggalStart' => 'required',
            'barangs' => 'required|array',
            'barangs.*.id' => 'required',
            'barangs.*.jumlah' => 'required|integer|min:1',
        ]);

        // Ambil data dari request
        $kodeTransaksi = $request->input('kode_transaksi');
        $idUser = $request->input('id_user');
        $alamat = $request->input('alamat');
        $namaPeminjam = $request->input('namaPeminjam');
        $totalHarga = $request->input('totalHarga');
        $tanggalStart = $request->input('tanggalStart');
        $barangs = $request->input('barangs');

        // Simpan data transaksi
        $transaksi = new ShopModel();
        $transaksi->kode_transaksi = $kodeTransaksi;
        $transaksi->id_user = $idUser;
        $transaksi->alamat = $alamat;
        $transaksi->namaPeminjam = $namaPeminjam;
        $transaksi->totalHarga = $totalHarga;
        $transaksi->tanggal_start = $tanggalStart;
        // Setel tanggal_finish sesuai kebutuhan

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
    public function update(Request $request, $id)
    {
        $transaksi = ShopModel::find($id);
        if ($transaksi) {
            $tanggal_finish = $request->input('tanggal_finish');
            $denda = $request->input('denda');
            $terlambat = $request->input('terlambat');
            $status = $request->input('status');
            $transaksi->tanggal_finish = $tanggal_finish;
            $transaksi->denda = $denda;
            $transaksi->terlambat = $terlambat;
            $transaksi->status = $status;
            $transaksi->save();

            return response()->json(['message' => 'Penyewaan Selesai']);
        }

        return response()->json(['message' => 'Data not found'], 404);
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
