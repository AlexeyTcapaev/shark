<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = ['text', 'creator_id', 'status','chat_id'];
    public $load_map = [
        'creator'
    ];
    public function creator()
    {
        return $this->hasOne(User::class,'id','creator_id');
    }
    public function chat()
    {
      return $this->belongsTo(Chat::class);
    }
    public function scopeWithAll($query)
    {
        return $query->with($this->load_map);
    }
}
