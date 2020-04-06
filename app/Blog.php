<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
class Blog extends Model
{
    use CanBeLiked;
 public function user(){
     return $this->belongsTo(User::class);  
 }

    protected $fillable = ['body','post_type','title','blog_image','user_id','slug'];
}
