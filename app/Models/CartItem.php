<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';
    
    protected $fillable = [
        'user_id',
        'producto_id',
        'cantidad',
    ];

    public function user() //relacion con el usuario
    {
        return $this->belongsTo(User::class); 
    }

    public function producto() //relacion con el producto
    {
        return $this->belongsTo(Producto::class,'producto_id', 'producto_id'); //El segundo parámetro 'producto_id' es el foreign key en cart_items
    }


}
