<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    public function barang()
    {
        return $this->hasMany(BarangModel::class);
    }

    public function barangs()
    {
        return $this->belongsToMany(Barang::class, 'transaksi_barangs')
            ->withPivot('jumlah')
            ->withTimestamps();
    }
}
