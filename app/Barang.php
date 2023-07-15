<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = ['id'];
    public $incrementing = false;
    protected $fillable = [
        'id','kode_barang', 'nama_barang', 'deskripsi','stok_barang','harga_barang'
    ];
}
