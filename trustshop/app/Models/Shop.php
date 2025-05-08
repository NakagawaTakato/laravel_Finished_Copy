<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'image',
        'detail',
        'is_display'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
