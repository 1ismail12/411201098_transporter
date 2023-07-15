<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Kurir extends Model
{
    protected $table = 'kurir';
    protected $primaryKey = ['id'];
    public $incrementing = false;
    protected $fillable = [
        'id','name', 'email', 'password'
    ];
    


}
