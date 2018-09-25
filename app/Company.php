<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'creator_id', 'website','company_type_id'];
    public $load_map = [
        'activities',
        'company_type'
    ];

    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function activities()
    {
        return $this->belongsToMany(Activity::class)->withTimestamps();
    }
    public function company_type()
    {
        return $this->belongsTo(CompanyType::class,'company_type_id','id');
    }
    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }
        if ($this->image != null)
            Storage::delete('public/uploads/' . $this->logo);
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('public/uploads', $filename);
        $this->logo = $filename;
        $this->save();
    }
    public function remove()
    {
        Storage::delete('public/uploads/' . $this->logo);
        $this->delete();
    }
    public static function add($fields)
    {
        $company = Company::create($fields->all());
        return $company;
    }
    public function scopeWithAll($query)
    {
        return $query->with($this->load_map);
    }
}
