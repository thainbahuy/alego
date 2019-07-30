<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    protected $table = 'event';

    public function getAllEvent(){
        return DB::table($this->table)
            ->select('id','name','image_cover','author')
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
