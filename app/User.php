<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Overtrue\LaravelFollow\Traits\CanLike;

class User extends Authenticatable
{
    use CanLike, Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','email', 'password','google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot(){
        parent::boot();
        static::created(function($user){
            $user->profile()->create([
                'title'=>$user->username,
            ]);

        });
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function event(){
        return $this->hasOne(Event::class);
    }
    public function blog(){
        return $this->hasMany(Blog::class)->orderBy('created_at','DESC');
    }
    public function following(){
        return $this->belongsToMany(Profile::class);
    }
}
