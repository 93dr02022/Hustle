<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'quotation_id',
        'description',
        'quantity',
        'price',
        'tax_rates',
        'taxed_price',
        'total_price',
        'discount',
    ];
}
