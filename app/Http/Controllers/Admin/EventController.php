<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function deleteEventById(Request $request)
    {
        $id = $request->get('id');
        $this->event->deleteEventById($id);
        return response()->json('', Response::HTTP_OK);
    }
}
