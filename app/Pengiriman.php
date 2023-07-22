<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = ['id'];
    public $incrementing = false;
    protected $fillable = [
        'id','no_pengiriman', 'tanggal', 'lokasi_id','barang_id','jumlah_barang', 'harga_barang', 'kurir_id'
    ];
}
