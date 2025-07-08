<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';

    protected $fillable = [
        'user_id',
        'total',
        'estado',
    ];          

    public function user() // Relación con el usuario
    {
        return $this->belongsTo(User::class);
    }

    public function ordenItems() // Relación con los items de la orden
    {
        return $this->hasMany(OrdenItem::class);
    }
}
