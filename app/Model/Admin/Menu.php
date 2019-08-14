<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $table = 'menu';

    public function getAllMenu()
    {
        return DB::table('menu')
            ->select('menu_id', 'name')
            ->get();
    }

    public function getMenuById($id)
    {
        return DB::table('menu')
            ->where('menu_id', $id)
            ->select('menu_id', 'name')
            ->first();
    }

    public function deleteMenuById($id)
    {
        return DB::table('menu')
            ->where('menu_id', $id)
            ->delete();
    }

    public function addNewMenu($name)
    {
        $menu = new Menu;
        $menu->name = $name;
        return $menu->save();
    }

    public function editMenuById($id, $name)
    {
        return DB::table($this->table)
            ->where('menu_id', $id)
            ->update(['name' => $name]);
    }


}
