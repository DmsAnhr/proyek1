<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(ShopModel::class);
    }
}
