<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'user_id',
        'seller_id',
        'gig_id',
        'order_item_id',
        'review_id',
        'rating',
        'message',
        'status',
        'seen'
    ];

    protected $casts = [
        'seen' => 'boolean'
    ];

    /**
     * Scope a query to only include active
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Get user
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed(); // Buyer
    }
    public function repliedReview()
    {
        return $this->hasOne(self::class, 'review_id'); // Replied review
    }
    /**
     * Get seller
     *
     * @return object
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id')->withTrashed();
    }

    /**
     * Get gig
     *
     * @return object
     */
    public function gig()
    {
        return $this->belongsTo(Gig::class, 'gig_id');
    }

     /**
     * Get gig
     *
     * @return object
     */
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

}
