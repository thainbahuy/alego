<?php

namespace App\Http\Controllers\Website;


use App\Http\Controllers\Controller;

use App\Web\Event;
use App\Web\Menu;
use App\Web\SubMenu;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    private $eventModel, $subMenuModel, $menuModel;

    function __construct(Event $eventModel, SubMenu $subMenuModel, Menu $menuModel)
    {
        $this->eventModel = $eventModel;
        $this->subMenuModel = $subMenuModel;
        $this->menuModel = $menuModel;
    }

    public function index($event)
    {
        $event = explode('-', $event);
        $data['menu'] = $this->getMenu();
        $data['event'] = $this->eventModel->getEventById($event[sizeof($event) - 1]);
        return view('web.event-detail', $data);
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
