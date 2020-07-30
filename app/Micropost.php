<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
        protected $fillable = ['content'];
        
        public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //Userとは多対多の関係
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
}
