<?php

namespace App\Models\backend;

use App\Models\Applicant;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title','position','description','salary','vacancy','start_date','end_date','image','availability','category_id','location_id','industry_id','company_id'];

    public function category():BelongsTo
    {
      return $this->belongsTo(Category::class); 
    }
    public function location():BelongsTo
    {
      return $this->belongsTo(Location::class); 
    }
    public function industry():BelongsTo
    {
      return $this->belongsTo(Industry::class); 
    }
    public function company():BelongsTo
    {
      return $this->belongsTo(Company::class); 
    }

    public function applicant():HasMany
    {
      return $this->hasMany(Applicant::class); 
    }

    public function setTagAttribute($value)
    {
        $this->attributes['tag'] = json_encode($value);
    }


    public function getTagAttribute($value)
    {
        // return $this->attributes['tag'] = json_decode($value);
        return is_array($value) ? $value : json_decode($value, true);
    }
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'salary' => $this->salary,
            'tag' => $this->tag,
            'category_id' => $this->category_id,
            'location_id' => $this->location_id,
        ];
    }

}
