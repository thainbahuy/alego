<?php

namespace App\Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    protected $table = 'event';

    public function getAllEventForHomePage($index){
        $offset = $index * 5;
        return DB::table($this->table)
            ->where('show_home','1')
            ->select('id','name','image_cover','author')
            ->offset($offset)
            ->limit(5)
            ->get();
    }

    public function getEventById($id){
        return DB::table($this->table)
            ->where('id',$id)
            ->select('id','name','video_link','description','editor_designer','director_photographer','producer','author')
            ->get();
    }

    public function getEventByIdSubMenu($id){
        return DB::table($this->table)
            ->where('sub_menu_id',$id)
            ->select('id','name','image_cover','author')
            ->get();
    }
}
