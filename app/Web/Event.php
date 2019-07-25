<?php

namespace App\Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    protected $table = 'event';

    public function getAllEventForHomePage(){
        return DB::table($this->table)
            ->where('show_home','1')
            ->select('id','name','image_cover','author')
            ->paginate(10);
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
            ->paginate(2);
    }
}
