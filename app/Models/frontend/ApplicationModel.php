<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationModel extends Model
{
    use HasFactory;
    protected $table = 'applicants';
    protected $fillable = ['name','email','contact','bio','cv','candidate_id','job_id'];
    // contact	bio	cv
}
