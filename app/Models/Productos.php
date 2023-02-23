<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
    public function client()
{
    return $this->belongsTo(Client::class);
}
}
