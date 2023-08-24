<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderItems;

class OrderTimeline extends Model
{
    use HasFactory;
    protected $table = 'order_timelines';
    protected $fillable = [
        'name', 'description','order_item_id'
    ];


    public function orderItems() {
        return $this->belongsTo(orderItem::class,'order_item_id','id' );
    }
}
