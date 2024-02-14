<?php

namespace App\Models;

use App\Models\backend\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Company extends Authenticatable
{
    use HasFactory,HasApiTokens, Notifiable;
    protected $fillable = ['name','email','password','limit','status'];
    public function package():BelongsTo
    {
      return $this->belongsTo(Package::class); 
    }
    public function payment():BelongsTo
    {
      return $this->belongsTo(Payment::class); 
    }
    public function companyDetails():HasMany
    {
      return $this->hasMany(CompanyDetails::class); 
    }
    public function job():HasMany
    {
      return $this->hasMany(Job::class); 
    }
    public function applicant():HasMany
    {
      return $this->hasMany(Applicant::class); 
    }
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
