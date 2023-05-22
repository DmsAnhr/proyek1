<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ShopModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    // public function barang()
    // {
    //     return $this->hasMany(BarangModel::class);
    // }

    public function barangs(): BelongsToMany
    {
        return $this->belongsToMany(BarangModel::class, 'transaksi_barang', 'transaksi_id', 'barang_id')
            ->withPivot('barang_id', 'jumlah')
            ->withTimestamps();
    }
}
