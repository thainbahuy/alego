<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubMenu extends Model
{
    protected $table = 'sub_menu';

    public function getAllSubMenu()
    {
        return DB::table('sub_menu')
            ->select('sub_menu_id', 'sub_menu.name','menu.name as menu')
            ->join('menu','menu.menu_id','=','sub_menu.menu_id')
            ->get();
    }


}
