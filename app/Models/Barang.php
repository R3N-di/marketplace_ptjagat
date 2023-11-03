<?php

namespace App\Models;

use App\Models\GambarBarang;
use App\Models\KategoriBarang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nama_barang', 'qty_barang', 'gambar_thumbnail',
        'kategori_barang_id', 'harga_barang', 'diskon_barang'
    ];

    /**
     * The kategoriBarang that belong to the Barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function kategoriBarang(): BelongsToMany
    {
        return $this->belongsToMany(KategoriBarang::class, 'kategori_barang_id');
    }
}
