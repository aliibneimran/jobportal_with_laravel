<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyDetails extends Model
{
    use HasFactory;
    protected $fillable = ['contact','type','address','image','cover_image','bio','company_id','status'];
    public function company():BelongsTo
    {
      return $this->belongsTo(Company::class); 
    }
}
