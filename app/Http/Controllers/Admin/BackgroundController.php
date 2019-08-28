<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackgroundRequest;
use App\Model\Admin\Background;
use Helpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class BackgroundController extends Controller
{
    private $background;

    public function __construct(Background $background)
    {
        $this->background = $background;
    }

    public function index()
    {
        $listBackground = $this->background->getAllBackground();
        return view('admin/background/list_background', compact('listBackground'));
    }

    public function showAddNewBackground()
    {
        return view('admin/background/add');
    }

    public function addNewBackground(BackgroundRequest $request)
    {
        $image_link = $request->get('image_cover');
        $position = $request->get('position');
        $image_link = Helpers::getNameImage($image_link);
        if ($this->background->addNewBackground($image_link, $position) == true) {
            Log::info('add background success');
            return redirect()->back()->with('message-success', 'Add Background');
        } else {
            return redirect()->back()->with('message-fail', 'Add Background');
        }
    }

    public function deleteBackgroundId(Request $request)
    {
        $id = $request->get('id');
        $image = $this->background->getImageByIdBackground($id);
        if ($this->background->deleteBackground($id) == 1) {
            Helpers::deleteFileInPublicFolder($image->image_link);
            Log::info('delete background success');
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }



}
