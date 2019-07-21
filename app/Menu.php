<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\SubMenu;

class Menu extends Model
{
    public static function getAllMenu(){
        return DB::table('menu')->select('menu_id','name')->get();
    }

}
