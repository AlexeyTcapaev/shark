<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function comments()
    {
      return $this->hasMany(ChatMessage::class,'chat_id','id');
    }

    public $load_map = [
        'users'
    ];
    public function scopeWithAll($query)
    {
        return $query->with($this->load_map);
    }
    public function scopeForChat($query, $id)
    {
        return $query->with(['users' => function ($q) use ($id) {
            $q->where('user_id', '!=', $id);
        }]);
    }
}
