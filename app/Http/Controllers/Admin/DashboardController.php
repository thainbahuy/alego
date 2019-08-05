<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use App\Model\Admin\Menu;
use App\Model\Admin\SubMenu;

class DashboardController extends Controller
{
    private $event, $subMenu , $menu;

    public function __construct(Event $event, SubMenu $subMenu,Menu $menu)
    {
        $this->event = $event;
        $this->subMenu = $subMenu;
        $this->menu = $menu;
    }

    public function index()
    {
        $listEvent = $this->event->getAllEvent();
        $listMenu = $this->menu->getAllMenu();
        $listSubMenu = $this->subMenu->getAllSubMenu();
        return view('admin/index', compact('listEvent','listMenu','listSubMenu'));
    }

    public function showAddNewEvent()
    {
        $listSubMenu = $this->subMenu->getAllSubMenu();
        return view('admin/event/addnew', compact('listSubMenu'));
    }

    public function showEditEvent($id)
    {
        $listSubMenu = $this->subMenu->getAllSubMenu();
        $event = $this->event->getEventById($id);
        return view('admin/event/edit', compact('listSubMenu', 'event'));

    }

}
