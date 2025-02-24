<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImageModel extends Model
{
    /** @use HasFactory<\Database\Factories\ItemImageModelFactory> */
    use HasFactory;
    protected $table = 'item_image';
    protected $fillable = [ 'images'];
}
