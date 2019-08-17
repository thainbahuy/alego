<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Model\Web\Event;
use App\Model\Web\Member;
use App\Model\Web\Menu;
use App\Model\Web\SubMenu;

class AboutUsController extends Controller
{
    private $eventModel, $subMenuModel, $menuModel, $memberModel;

    function __construct(Event $eventModel, SubMenu $subMenuModel, Menu $menuModel, Member $memberModel)
    {
        $this->eventModel = $eventModel;
        $this->subMenuModel = $subMenuModel;
        $this->menuModel = $menuModel;
        $this->memberModel = $memberModel;
    }

    public function index()
    {
        $data['menu'] = $this->getMenu();
        $data['listMember'] = $this->memberModel->getAllMember();
        return view('web.about', $data);
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
