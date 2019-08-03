<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use App\Model\Admin\SubMenu;

class DashboardController extends Controller
{
    private $event, $subMenu;

    public function __construct(Event $event, SubMenu $subMenu)
    {
        $this->event = $event;
        $this->subMenu = $subMenu;
    }

    public function index()
    {
        $listEvent = $this->event->getAllEvent();
        return view('admin/index', compact('listEvent'));
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
