<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    public function index()
    {
        return view('web.eventdetail');
    }
}
