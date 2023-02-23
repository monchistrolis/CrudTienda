<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
    public function products()
{
    return $this->hasMany(Product::class);
}
}
