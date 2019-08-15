<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Background;
use Illuminate\Http\Request;

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
}
