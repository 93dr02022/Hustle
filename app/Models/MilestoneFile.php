<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneFile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string, string
     */
    protected $fillable = [
        'user_id',
        'project_milestone_id',
        'file',
        'file_name',
        'sent_by',
    ];

    /**
     * The attributes that should be casts
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'updated_at' => 'date:m/d/Y'
    ];
}
