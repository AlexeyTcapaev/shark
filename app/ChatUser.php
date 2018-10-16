<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatUser extends Model
{
    protected $table = 'chat_user';
    public $load_map = [
        'chat',
        'users'
    ];

    public function chat()
    {
      return $this->hasOne(Chat::class,'id', 'chat_id');
    }  
    public function users()
    {
      return $this->hasMany(User::class,'id', 'user_id');
    }
    public function scopeWithAll($query)
    {
        return $query->with($this->load_map);
    }
}
