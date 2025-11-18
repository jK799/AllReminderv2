<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'category',
        'model',
        'serial_number',
        'purchase_date',
        'warranty_until',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

