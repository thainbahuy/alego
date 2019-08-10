<?php

namespace App\Model\Admin;

use DateTime;
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

    public function deleteSubMenu($id){
        return DB::table($this->table)->where('sub_menu_id', $id)->delete();
    }

    public function addNewSubMenu($menuId , $name){
        return DB::table($this->table)->insert(
            [
                'name' => $name,
                'menu_id' => $menuId,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        );
    }

    public function updateSubMenu($id,$menuId,$name){
        return DB::table($this->table)
            ->where('sub_menu_id', $id)
            ->update(
            [
                'name' => $name,
                'menu_id' => $menuId,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        );
    }

    public function getSubMenuById($id){
        return DB::table($this->table)->where('sub_menu_id', $id)
            ->select('*')
            ->first();
    }


}
