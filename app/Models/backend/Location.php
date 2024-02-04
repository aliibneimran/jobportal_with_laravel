<?php

namespace App\Models\backend;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];
    public function job():HasMany
    {
      return $this->hasMany(Job::class); 
    }
    // public function applicant():HasMany
    // {
    //   return $this->hasMany(Applicant::class); 
    // }
}
