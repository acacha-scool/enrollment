<?php

namespace Scool\Enrollment\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enrollment.
 *
 * @package Scool\Enrollment\Models
 */
class Enrollment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','study_id','course_id','classroom_id'];

    /**
     * Get the details for the enrollment.
     */
    public function details()
    {
        return $this->hasMany(EnrollmentSubmodule::class);
    }
}
