<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSearch extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array<String, string>
     */
    protected $fillable = [
        'user_id',
        'keywords',
    ];
}
