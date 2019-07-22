<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['menu'] = $this->getMenu();
        return view('web.contact-us',$data);
    }

    private function getMenu () {
        $data = [];
        $menu = Menu::getAllMenu();
        foreach ($menu as $item){
            $data[$item->name] = SubMenu::getAllSubMenu($item->menu_id);
        }
        return $data;

    }
}
