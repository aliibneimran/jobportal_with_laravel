<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','tnx_number','company_id','package_id','status'];
    public function company():HasMany
    {
      return $this->hasMany(Company::class); 
    }
}
