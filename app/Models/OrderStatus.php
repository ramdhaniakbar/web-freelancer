<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatus extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'order_status';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name', 
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // One to many
    public function order()
    {
        return $this->hasMany(Order::class, 'order_status_id');
    }
}
