<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_token', 'F', 'I', 'O'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function chats()
    {
        return $this->belongsToMany(Chat::class)->withTimestamps();
    }
    public function companies()
    {
        return $this->belongsToMany(Company::class)->withTimestamps();
    }
    public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }
        if ($this->avatar != null)
            Storage::delete('public/uploads/' . $this->avatar);
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('public/uploads', $filename);
        $this->avatar = $filename;
        $this->save();
    }
    public function remove()
    {
        Storage::delete('public/uploads/' . $this->avatar);
        $this->delete();
    }
    public static function add($fields)
    {
        $user = User::create($fields->all());
        //$company->load($company->load_map);
        return $user;
    }
}
