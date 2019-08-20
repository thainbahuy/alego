<?php

namespace App\Http\Controllers\Website;


use App\Http\Controllers\Controller;
use App\Model\Web\Background;
use App\Model\Web\Event;
use App\Model\Web\Menu;
use App\Model\Web\SubMenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $eventModel, $subMenuModel, $menuModel,$background;

    function __construct(Event $eventModel, SubMenu $subMenuModel, Menu $menuModel,Background $background)
    {
        $this->eventModel = $eventModel;
        $this->subMenuModel = $subMenuModel;
        $this->menuModel = $menuModel;
        $this->background = $background;
    }

    public function index(Request $request)
    {
        $menu = $this->getMenu();
        $listBackground = $this->background->getAllBackground();
        $listEvent = $this->eventModel->getAllEventForHomePage();
        if ($request->ajax()) {
            $listEvent = $this->eventModel->getAllEventForHomePage();
            $view = view('data_event_home',compact('listEvent'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('web/first-home', compact('menu','listEvent','listBackground'));
    }

    public function loadEventByMenu(Request $request ,$menu, $sub_menu)
    {
        $menu = $this->getMenu();

        $sub_menu = explode('-', $sub_menu);
        $listEvent = $this->eventModel->getEventByIdSubMenu($sub_menu[sizeof($sub_menu) - 1]);

        if ($request->ajax()) {
            $view = view('data_event_type',compact('listEvent'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('web/home', compact('listEvent','menu'));
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
