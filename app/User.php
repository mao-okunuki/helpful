<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email' , 'password','gender','content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function irais()
    {
        return $this->hasMany(Irai::class);
    }
    
    public function feed_irais()
    {
        $user_ids = $this->pluck('users.id');
        $user_ids[] = $this->id;
        return Irai::whereIn('user_id', $user_ids);
    }
    
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
    
}

 