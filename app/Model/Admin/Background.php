<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Background extends Model
{
    protected $table = 'background';

    public function getAllBackground()
    {
        return DB::table($this->table)
            ->select('*')
            ->orderByRaw('ISNULL(position), position ASC')
            ->orderByDesc('id')
            ->get();
    }

    public function addNewBackground($image_link, $position)
    {
        $background = new Background;
        $background->position = $position;
        $background->image_link = $image_link;
        return $background->save();
    }

    public function deleteBackground($id)
    {
        return DB::table($this->table)
            ->where('id', $id)
            ->delete();
    }

    public function getImageByIdBackground($id){
        return DB::table($this->table)
            ->select('image_link')
            ->where('id', $id)
            ->first();
    }
}
