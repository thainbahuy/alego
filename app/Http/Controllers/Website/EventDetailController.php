<?php

namespace App\Http\Controllers\Website;

use App\Event;
use App\Http\Controllers\Controller;
use App\Menu;
use App\SubMenu;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    public function index($event)
    {
        $event = explode('-',$event);
        $data['menu'] = $this->getMenu();
        $data['event'] = Event::getEventById($event[sizeof($event)-1]);
        return view('web.event-detail',$data);
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
