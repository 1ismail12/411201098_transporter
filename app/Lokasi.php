<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';
    protected $primaryKey = ['id'];
    public $incrementing = false;
    protected $fillable = [
        'id','kode_lokasi', 'nama_lokasi'
    ];
}
