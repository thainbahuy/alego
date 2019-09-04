<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use Helpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

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
        $event = $this->event->getEventById($id);

        //get keyhash
        $keyhash = json_decode($event->image_cover,true)['keyhash'];

        if ($this->event->deleteEventById($id) == 1) {
//            delete image in cdn
            Helpers::deleteImageInCdn($keyhash);
            Log::info('delete event success');
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function addNewEventFilm(Request $request)
    {

        $name = trim($request->get('name'));
        $sub_menu = trim($request->get('sub_menu'));
        $producer = trim($request->get('producer'));
        $director = trim($request->get('director'));
        $editor = trim($request->get('editor'));
        $description = trim($request->get('description'));
        $author = trim($request->get('author'));
        $image_cover = $request->get('image_cover');
        $video_link = trim($request->get('video_link'));

        $image_cover=json_encode($image_cover, true);


        if ($request->get('showhome') == null) {
            //insert tra ve true
            if ($this->event->addNewEventFilm($name, $sub_menu, $author, $editor, $director,
                    $producer, $description, $image_cover, $video_link, 0) == true) {
                Log::info('add new event success');
                return redirect()->back()->with('message-success', 'Add New Event');

            } else {
                return redirect()->back()->with('message-fail', 'Add New Event Fail');
            }
        } else {
            if ($this->event->addNewEventFilm($name, $sub_menu, $author, $editor, $director,
                    $producer, $description, $image_cover, $video_link, 1) == true) {
                Log::info('add new event success');
                return redirect()->back()->with('message-success', 'Add New Event');
            } else {
                return redirect()->back()->with('message-fail', 'Add New Event Fail');
            }
        }

    }

    public function updateEventFilm(Request $request)
    {
        $id = trim($request->get('id'));
        $name = trim($request->get('name'));
        $sub_menu = trim($request->get('sub_menu'));
        $producer = trim($request->get('producer'));
        $director = trim($request->get('director'));
        $editor = trim($request->get('editor'));
        $description = trim($request->get('description'));
        $author = trim($request->get('author'));
        $image_cover = $request->get('image_cover');
        $video_link = trim($request->get('video_link'));

        $image_cover=json_encode($image_cover, true);

        //update event
        if ($request->get('showhome') == null) {
            //update tra ve 1
            if ($this->event->updateEventFilm($id, $name, $sub_menu, $author, $editor, $director,
                    $producer, $description, $image_cover, $video_link, 0) == 1) {
                Log::info('update event success');
                return redirect()->route('view.admin.index')->with('message-success', 'Update Event');

            } else {
                return redirect()->route('view.admin.index')->with('message-fail', 'Update Event Fail');
            }
        } else {
            if ($this->event->updateEventFilm($id, $name, $sub_menu, $author, $editor, $director,
                    $producer, $description, $image_cover, $video_link, 1) == 1) {
                Log::info('update event success');
                return redirect()->route('view.admin.index')->with('message-success', 'Update New Event');
            } else {
                return redirect()->route('view.admin.index')->with('message-fail', 'Update Event Fail');
            }
        }

    }
}
