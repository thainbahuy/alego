<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public $end_ponit = 'https://api.imgur.com/3/image';

    private function uploadImage($imageContent){

        $client = new Client();
        $request = $client->request(
            'POST',
            $this->end_ponit,
            [
                'headers' => [
                    'Authorization' => "Client-ID ".env('CLIENT_ID'),
                ],
                'form_params' => [
                    'image' => $imageContent,
                ]
            ]
        );
        $response = (string) $request->getBody();
        $jsonResponse = json_decode($response);
        Log::info('upload image to imgur success');
        return $jsonResponse;
    }

//    public function deleteImage(Request $request){
//        //chi lay ten hinh
//        $imageLink = $request->get('image');
//        $client = new Client();
//        $request = $client->request(
//            'DELETE',
//            $this->end_ponit.'/'.$imageLink,
//            [
//                'headers' => [
//                    'Authorization' => "Client-ID ".env('CLIENT_ID'), // post as anonymous
//                ],
//            ]
//        );
//        $response = (string) $request->getBody();
//        $jsonResponse = json_decode($response);
//        return $jsonResponse->status;
//    }

    /**
     * @param $file
     * @param $option 1 fullhd, 2 hd
     * @return mixed
     */
    private function resizeImage($imageFile,$option)
    {

        Image::configure(array('driver' => 'gd'));
        //$image =file_get_contents($imageFile->getRealPath());
        if ($option == 1) {
            $img = Image::make($imageFile)->resize(1280, 720);
            return $img->response('jpg');
        } else {
            $img = Image::make($imageFile)->resize(1920, 1080);
            return $img->response('jpg');
        }
    }

    public function uploadLoadImage (Request $request){
        $imageFile = $request->get('image');
        $option = $request->get('option');

        $imageResize = $this->resizeImage($imageFile,$option);
        $jsonResponse = $this->uploadImage($imageResize->content());

        return response()->json($jsonResponse->data,200);
    }

}
