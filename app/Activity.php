<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['name'];
    public function company()
    {
        return $this->belongsToMany(Company::class);
    }
    public static function add($fields)
    {
        $options = [];
        foreach ($fields as $option) {
            array_push($options, Activity::create((array)$option));
        }
        return $options;
    }
    public static function findAndUpdate($fields, $id)
    {
        $options = [];
        foreach ($fields as $option) {
            if (property_exists($option,'id')){
                $option->update($option->all());
                array_push($options, Activity::create((array)$option));
            } else {
                $option->product_id = $id;
                array_push($options, Activity::create((array)$option));
            }
        }
        return $options;
    }
}
