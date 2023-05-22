<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $barang = BarangModel::query();
            return DataTables::of($barang)->toJson();
        }
        $barang = BarangModel::all();
        return view('admin/item')
            ->with('kategori', KategoriModel::all());
    }

    public function getData()
    {
        $barang = BarangModel::with('kategori')->get();
        $kategori = KategoriModel::all();
        return response()->json(['barang' => $barang, 'kategori' => $kategori]);
        
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
        // if ($request->ajax()) {
        //     return "True request!";
        // }
        $validatedData = $request->validate([
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048', // Maksimum ukuran gambar 2MB
            'nama' => 'required|string',
            'kategori_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
        ]);

        // Mengunggah gambar dan mendapatkan path-nya

        $gambarPath = $request->file('foto')->store('images', 'public');

        $barang = new BarangModel;
        $barang->nama = $request->nama;
        $barang->kategori_id = $request->kategori_id;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;
        $barang->keterangan = $request->keterangan;
        $barang->foto = $gambarPath;
        $barang->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return response()->download(storage_path("app/$barang->foto"));
        $barang = BarangModel::with('kategori')->findOrFail($id);

        return response()->json($barang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangModel $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangModel $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $barang = BarangModel::findOrFail($id);
        $fotoPath = public_path('public/storage/images') . '/' . $barang->foto;
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }
        Storage::delete($barang->foto);
        $barang->delete();

        // if ($request->ajax()) {
        // }
        return response()->json(['message' => 'Barang berhasil dihapus']);
    }
}
