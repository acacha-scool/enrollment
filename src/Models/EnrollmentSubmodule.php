<?php

namespace Scool\Enrollment\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EnrollmentSubmodule.
 *
 * @package Scool\Enrollment\Models
 */
class EnrollmentSubmodule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['enrollment_id','module_id','submodule_id'];

    /**
     * Get the enrollment that owns the enrollment details.
     */
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
