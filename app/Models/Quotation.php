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
        'order_id',
        'payment_method',
        'phone_number',
        'first_name',
        'last_name',
        'email',
        'quote_date',
        'reference',
        'is_draft',
        'paid',
        'can_wallet',
        'in_wallet',
        'total',
        'expires_at',
        'total_discount',
        'total_tax',
        'total_quantity',

        'profit_value',
        'commission_value',
        'note',
    ];

    /**
     * The attributes that should be casts.
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'paid' => 'boolean',
        'expires_at' => 'date',
        'can_wallet' => 'boolean',
    ];

    /**
     * Get quotation owner
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The quotation items for this quotation
     */
    public function items()
    {
        return $this->hasMany(QuotationItem::class);
    }

    /**
     * The quotation items for this quotation
     */
    public function invoice()
    {
        return $this->hasOne(OrderInvoice::class, 'order_id', 'order_id');
    }

    /**
     * The quotation items for this quotation
     */
    public function invoices()
    {
        return $this->hasMany(OrderInvoice::class, 'order_id', 'order_id');
    }

    /**
     * Get quotation settings
     */
    public function settings()
    {
        return $this->hasOne(QuoteSetting::class, 'user_id', 'user_id');
    }

    /**
     * Scope to include auth user quotations
     */
    public function scopeAuthUser(Builder $query): Builder
    {
        return $query->where('quotations.user_id', auth()->id());
    }
}
