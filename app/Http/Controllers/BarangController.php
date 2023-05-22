<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use DataTables;

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
            $barang = BarangModel::all();
            return DataTables::of($barang)->toJson();
        }
        $barang = BarangModel::all();
        return view('admin/item')
            ->with('kategori', KategoriModel::all());
            
    }

    protected function getActionColumn($row): string
    {
        $formUrl = url('/barang/' . $row->id);
        $editUrl = url('/barang/' . $row->id . '/edit/');
        $actionCol = "<form action='$formUrl' method='POST'>
                        <a href='$editUrl' type='button' class='btn btn-sm btn-warning text-white'>
                            <i class='fas fa-edit'></i> Edit
                        </a>";
        $actionCol .= csrf_field();
        $actionCol .= "<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#deleteModal$row->id'><i class='fas fa-trash pr-1'></i>Delete</button>
                        <!-- Delete Modal -->
                        <div class='modal fade' id='deleteModal$row->id' tabindex='-1' role='dialog' aria-labelledby='deleteModalLabel$row->id' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                <h5 class='modal-title' id='deleteModalLabel$row->id'>Konfirmasi Hapus</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>
                                <div class='modal-body'>
                                <p>Anda yakin ingin menghapus $row->nama ?</p>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Tidak</button>
                                <form method='POST' action='$formUrl' class='d-inline pl-2'>";
        $actionCol .= csrf_field();
        $actionCol .= method_field('DELETE');
        $actionCol .= "<button type='submit' class='btn btn-danger'>Ya</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>";
    
        return $actionCol;
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
        
        $gambarPath = $request->file('foto')->store('images','public');
        
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
    public function show(BarangModel $barang)
    {
        return response()->download(storage_path("app/$barang->foto"));
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
    public function destroy(BarangModel $barang)
    {
        //
    }
}
