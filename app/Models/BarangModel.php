<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id';
    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'id');
    }

    public function transaksis(): BelongsToMany
    {
        return $this->belongsToMany(Transaksi::class, 'transaksi_barang', 'barang_id', 'transaksi_id')
                    ->withPivot('jumlah')
                    ->withTimestamps();
    }
}
