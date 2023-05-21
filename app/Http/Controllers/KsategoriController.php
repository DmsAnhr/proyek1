<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function createCategory(Request $request)
{
    $data = new KategoriModel();
    $data->nama = $request->nama;
    $data->save();

    return response()->json(['message' => 'Data berhasil ditambahkan']);
}
}
