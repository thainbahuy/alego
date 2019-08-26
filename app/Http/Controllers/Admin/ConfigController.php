<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Helpers;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function showConfig()
    {
        $jsonPaginate = file_get_contents(storage_path('config.json'));
        $jsonData = json_decode($jsonPaginate, true);
        return view('admin/config/config', compact('jsonData'))->with('title', 'Config system');
    }

    public function saveConfig(Request $request)
    {
        $jsonPaginate = file_get_contents(storage_path('config.json'));
        $jsonData = json_decode($jsonPaginate, true);

        //update
        $jsonData['Email'] = $request->email;
        $jsonData['Quantity_Event_Home'] = $request->quantity_event_home;
        $jsonData['Quantity_Event_Type'] = $request->quantity_event_type;

        //write
        $this->wirteJSonData($jsonData);
        return redirect()->back()->with('message-success', 'save ok');

    }

    private function wirteJSonData($jsonData)
    {
        $newJsonData = json_encode($jsonData, JSON_PRETTY_PRINT);
        file_put_contents(storage_path('config.json'), stripslashes($newJsonData));
    }
}
