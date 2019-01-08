<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Department extends Model
{
    use NodeTrait, Sluggable {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }
    protected $fillable = ['name', 'slug'];
    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function employees()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function add(Request $request)
    {
        Department::checkUniqueInThree($request->name, $request->root);
        $department = Department::create(['name' => $request->name], Department::where('slug', $request->root)->first());
    }
    public static function checkUniqueInThree($name, $root)
    {
        $root = Department::where('slug', $root)->first();
        $childs = Department::whereBetween('_lft', [$root->_lft, $root->_rgt])->where('name', $name)->get();
        if (empty($childs)) {
            return true;
        } else {
            return false;
        }
    }
}
