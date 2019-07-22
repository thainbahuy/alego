<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    public static function getAllEventForHomePage(){
        return DB::table('event')
            ->where('show_home','1')
            ->select('id','name','image_cover','author')
            ->get();
    }

    public static function getEventById($id){
        return DB::table('event')
            ->where('id',$id)
            ->select('id','name','video_link','description','editor_designer','director_photographer','producer','author')
            ->get();
    }

    public static function getEventByIdSubMenu($id){
        return DB::table('event')
            ->where('sub_menu_id',$id)
            ->select('id','name','image_cover','author')
            ->get();
    }
}
