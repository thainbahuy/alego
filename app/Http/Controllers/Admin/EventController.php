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
        if ($this->event->deleteEventById($id) == 1) {
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function addNewEventFilm(Request $request)
    {

        $name = $request->get('name');
        $sub_menu = $request->get('sub_menu');
        $producer = $request->get('producer');
        $director = $request->get('director');
        $editor = $request->get('editor');
        $description = $request->get('description');
        $author = $request->get('author');
        $image_cover = $request->get('image_cover');
        $video_link = $request->get('video_link');
        if ($request->get('showhome') == null) {
            //insert tra ve true
            //dd($this->event->addNewEventFilm($name, $sub_menu, $author, $editor, $director, $producer, $description, $image_cover, $video_link, 0));
        } else {
            //dd($this->event->addNewEventFilm($name, $sub_menu, $author, $editor, $director, $producer, $description, $image_cover, $video_link, 1));
        }

    }
}
