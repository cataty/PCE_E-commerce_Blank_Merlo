<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blogpost extends Model
{
    use HasFactory;
    protected $table = 'blog';

   

    public function categoria_blog(): BelongsTo {
        return $this->belongsTo(CategoriaBlog::class, 'categoria_blog_id', 'categoria_blog_id');}


}


