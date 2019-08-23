<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubMenuController extends Controller
{
    private $SubMenu;

    public function __construct(SubMenu $SubMenu)
    {
        $this->SubMenu = $SubMenu;
    }

    public function deleteSubMenu(Request $request)
    {
        $id = $request->get('id');
        if ($this->SubMenu->deleteSubMenu($id) == 1) {
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function addNewSubMenu(Request $request)
    {
        $name = $request->get('name');
        $menu_id = $request->get('menu_id');
        if ($this->SubMenu->addNewSubMenu($menu_id, $name) == true) {
            return redirect()->back()->with('message-success', 'Add Sub Menu');
        } else {
            return redirect()->back()->with('message-fail', 'Add Sub Menu');
        }

    }

    public function updateSubMenu(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $menu_id = $request->get('menu_id');
        if($this->SubMenu->updateSubMenu($id,$menu_id,$name) == 1){
            return redirect()->route('view.admin.index')->with('message-success', 'Update SubMenu');
        }else{
            return redirect()->route('view.admin.index')->with('message-fail', 'Update SubMenu');
        }
    }
}
