<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CategoriaBlog extends Model
{
  use HasFactory;
  protected $table = 'categoria_blog';
  protected $primaryKey = 'categoria_blog_id';
}
