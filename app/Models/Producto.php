<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    protected $fillable = [
        'nombre_producto',
        'categoria',
        'descripcion',
        'precio_compra',
        'precio_venta',
        'stock',
        'fecha_registro',
    ];

    public function setPrecioCompraAttribute($value)
    {
        $this->attributes['precio_compra'] = Crypt::encryptString($value);
    }

    public function getPrecioCompraAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
