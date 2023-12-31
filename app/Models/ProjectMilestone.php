<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMilestone extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_milestones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'project_id',
        'created_by',
        'freelancer_id',
        'employer_id',
        'amount',
        'description',
        'status',
        'decline_reason'
    ];

    /**
     * Get project
     *
     * @return object
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    /**
     * milestone attachhments
     */
    public function attachments()
    {
        return $this->hasMany(MilestoneFile::class);
    }

    /**
     * Get freelancer
     *
     * @return object
     */
    public function freelancer()
    {
        return $this->belongsTo(User::class, 'freelancer_id');
    }

    /**
     * Get employer
     *
     * @return object
     */
    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }
}
