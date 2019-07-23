<?php

namespace App\Http\Controllers\Website;

use App\Event;
use App\Http\Controllers\Controller;
use App\Menu;
use App\SubMenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $eventModel, $subMenuModel,$menuModel;

    function __construct(Event $eventModel, SubMenu $subMenuModel , Menu $menuModel)
    {
        $this->eventModel = $eventModel;
        $this->subMenuModel = $subMenuModel;
        $this->menuModel = $menuModel;
    }

    public function index()
    {
        $data['menu'] = $this->getMenu();
        $data['listEvent'] = $this->eventModel->getAllEventForHomePage(0);
        return view('web/first-home', $data);
    }

    public function getEventByMenu($menu, $sub_menu)
    {
        $data['menu'] = $this->getMenu();
        $sub_menu = explode('-', $sub_menu);
        $data['listEvent'] = $this->eventModel->getEventByIdSubMenu($sub_menu[sizeof($sub_menu) - 1]);
        return view('web/home', $data);
    }

    private function getMenu()
    {
        $data = [];
        $menu = $this->menuModel->getAllMenu();
        foreach ($menu as $item) {
            $data[$item->name] = $this->subMenuModel->getAllSubMenu($item->menu_id);
        }
        return $data;

    }
}
