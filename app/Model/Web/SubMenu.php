<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubMenu extends Model
{
    protected $table ='sub_menu';

    public function getAllSubMenu($idMenu)
    {
        return DB::table('sub_menu')->select('sub_menu_id','name')
            ->where('menu_id', $idMenu)
            ->get();
    }



}
