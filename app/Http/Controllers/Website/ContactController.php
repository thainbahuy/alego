<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Jobs\SendMailJob;
use App\Model\Web\Event;
use App\Model\Web\Menu;
use App\Model\Web\SubMenu;

class ContactController extends Controller
{
    private $eventModel, $subMenuModel, $menuModel;

    function __construct(Event $eventModel, SubMenu $subMenuModel, Menu $menuModel)
    {
        $this->eventModel = $eventModel;
        $this->subMenuModel = $subMenuModel;
        $this->menuModel = $menuModel;
    }

    public function index()
    {
        $data['menu'] = $this->getMenu();
        return view('web.contact-us', $data);
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

    public function contactToAdmin(ContactRequest $request)
    {
        $name_metting = $request->get('name_metting');
        $type_metting = $request->get('type_metting');
        $email = $request->get('email');
        $name = $request->get('name');
        $phone = $request->get('phone');
        $date = $request->get('date');
        $message = $request->get('message');

        $data = array('type_metting' => $type_metting,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'date'  => $date,
            'mess' => $message,
        );
        $Job = (new SendMailJob('contactMail', $data, 'Lịch hẹn '.$name_metting,
            'alegostory.system@gmail.com', 'Alego Story system', 'thainbahuy@gmail.com'))->delay(60 * 0.5);;
        $this->dispatch($Job);
        return redirect()->back()->with('success', __('Message.Contact-Noti-Success'));

    }


}
