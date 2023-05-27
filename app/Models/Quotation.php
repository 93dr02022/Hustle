<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'phone_number',
        'firt_name',
        'last_name',
        'email',
        'quote_date',
        'reference',
        'is_draft',
        'total',
        'total_discount',
    ];

    /**
     * The quotation items for this quotation
     */
    public function quotationItems()
    {
        return $this->hasMany(QuotationItem::class);
    }

    /**
     * Scope to include auth user quotations
     */
    public function scopeAuthUser(Builder $query): Builder
    {
        return $query->where('quotations.user_id', auth()->id());
    }
}
