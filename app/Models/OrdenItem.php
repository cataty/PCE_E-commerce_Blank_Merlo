<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrdenItem extends Model
{
    use HasFactory;

    protected $table = 'orden_items';

    protected $fillable = [
        'orden_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
    ];

    public function orden(): BelongsTo // Relación con la orden
    {
        return $this->belongsTo(Orden::class);
    }

    public function producto(): BelongsTo // Relación con el producto
    {
        return $this->belongsTo(Producto::class);
    }

}
