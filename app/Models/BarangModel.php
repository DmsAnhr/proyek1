<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'id_kategori');
    }

    public function transaksi()
    {
        return $this->belongsTo(ShopModel::class);
    }
}
