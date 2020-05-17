<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable =['title','description','images','video_link','date','address','user_id','slug'];
}
