<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use App\Model\Admin\Menu;
use App\Model\Admin\SubMenu;

class DashboardController extends Controller
{
    private $event, $subMenu, $menu;

    public function __construct(Event $event, SubMenu $subMenu, Menu $menu)
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
        return view('admin/index', compact('listEvent', 'listMenu', 'listSubMenu'));
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

    public function showAddNewSubMenu()
    {
        $listMenu = $this->menu->getAllMenu();
        return view('admin/submenu/add', compact('listMenu'));
    }

    public function showEditSubMenu($id)
    {
        $listMenu = $this->menu->getAllMenu();
        $subMenu = $this->subMenu->getSubMenuById($id);
        return view('admin/submenu/edit', compact('listMenu', 'subMenu'));

    }

    public function showAddNewMenu()
    {
        return view('admin/menu/add');
    }

    public function showEditMenu($id)
    {
        $menu = $this->menu->getMenuById($id);
        return view('admin/menu/edit', compact('menu'));

    }

}
