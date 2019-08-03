<?php

namespace App\Model\Admin;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    protected $table = 'event';

    public function getAllEvent()
    {
        return DB::table($this->table)
            ->select('id', 'name', 'image_cover', 'author')
            ->get();
    }

    public function getEventById($id)
    {
        return DB::table($this->table)
            ->where('id', $id)
            ->select('id', 'name', 'video_link', 'description', 'editor_designer', 'director_photographer', 'producer', 'author')
            ->get();
    }

//    public function getEventByIdSubMenu($id){
//        return DB::table($this->table)
//            ->where('sub_menu_id',$id)
//            ->select('id','name','image_cover','author')
//            ->get();
//    }

    public function deleteEventById($id)
    {
        return DB::table($this->table)->where('id', $id)->delete();
    }

    public function addNewEventFilm($name, $sub_menu_id, $author, $editor_designer, $director_photographer, $producer, $description, $image_cover, $video_link, $showhome)
    {
        return DB::table($this->table)->insert(
            [
                'name' => $name,
                'sub_menu_id' => $sub_menu_id,
                'author' => $author,
                'editor_designer' => $editor_designer,
                'director_photographer' => $director_photographer,
                'producer' => $producer,
                'description' => $description,
                'image_cover' => $image_cover,
                'video_link' => $video_link,
                'type' => 1,
                'show_home' => $showhome,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        );
    }
}
