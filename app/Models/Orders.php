<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_type',
        'order_pages',
        'order_status',
        'order_level',
        'order_deadline',
        'order_instructions',
        'file_name',
        'file_path',



    ];
}
