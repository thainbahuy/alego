<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    public static function getAllEventForHomePage(){
        return DB::table('event')->where('show_home','1')->select('id','name','image_cover','author')->get();
    }
}
