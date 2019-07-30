<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public static function getAllMenu(){
        return DB::table('menu')->select('menu_id','name')->get();
    }

}
