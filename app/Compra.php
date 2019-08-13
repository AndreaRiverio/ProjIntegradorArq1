<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";
    protected $primaryKey = "idCompra";
    public $timestamps = false;
    public $fillable = ['idCompra'];
}
