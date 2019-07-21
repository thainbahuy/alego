<?php

namespace App\Http\Controllers\Website;

use App\Event;
use App\Http\Controllers\Controller;
use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['menu'] = $this->getMenu();
        $data['listEvent'] = Event::getAllEventForHomePage();
        return view('web/first-home',$data);
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
