<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;
    protected $table = 'admins';

    protected $fillable = ['title'];
     public function user(): BelongsTo{
     return $this->belongsTo(User::class);
     }

     
}
