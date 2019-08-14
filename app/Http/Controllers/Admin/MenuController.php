<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    private $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function deleteMenuById(Request $request)
    {
        $id = $request->get('id');
        if ($this->menu->deleteMenuById($id) == 1) {
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function addNewMenu(Request $request)
    {
        $name = $request->get('name');
        if ($this->menu->addNewMenu($name) == true) {
            return redirect()->back()->with('message-success', 'Add Menu');
        } else {
            return redirect()->back()->with('message-fail', 'Add Menu');
        }

    }

    public function editMenuById(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        if ($this->menu->editMenuById($id, $name) == 1) {
            return redirect()->back()->with('message-success', 'Update Menu');
        } else {
            return redirect()->back()->with('message-fail', 'Update Menu');
        }
    }
}
