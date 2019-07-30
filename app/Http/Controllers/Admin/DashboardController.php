<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $listEvent = $this->event->getAllEvent();
        return view('admin/index',compact('listEvent'));
    }

}
