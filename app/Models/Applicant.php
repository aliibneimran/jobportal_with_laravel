<?php

namespace App\Models;

use App\Models\backend\Job;
use App\Models\backend\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','contact','bio','cv','candidate_id','job_id','company_id','status'];
    public function company():BelongsTo
    {
      return $this->belongsTo(Company::class); 
    }
    public function job():BelongsTo
    {
      return $this->belongsTo(Job::class); 
    }
    // public function location():BelongsTo
    // {
    //   return $this->belongsTo(Location::class); 
    // }
}
