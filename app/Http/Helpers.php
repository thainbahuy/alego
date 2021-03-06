<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class Helpers
{


    /**
     * convert json file to array
     * @param $jsonVarible
     * @return Array
     */
    public static function convertJsonToArray($jsonVarible)
    {
        return json_decode($jsonVarible, true);
    }

    /**
     * get file config and convert to array
     * @return Array
     */
    public static function convertArrayToJson($jsonVarible)
    {
        return json_encode($jsonVarible, true);
    }


    public static function getConfig()
    {
        $content = file_get_contents(Helpers::getFilePathFromStorage('config.json'));
        return Helpers::convertJsonToArray($content);
    }

    /**
     * return path of file in storage folder
     * @param $patch
     * @return string
     */
    public static function getFilePathFromStorage($patch)
    {
        return storage_path($patch);
    }


    /**
     * get name image from url
     * @param $image
     * @return string
     */
    public static function getNameImage($image)
    {
        return basename($image);
    }

    /**
     * random name for image
     * @param $nameImage
     * @return string
     */
    public static function createNewNameImage($nameImage)
    {
        return rand(10000000, 99999999) . "_" . rand(10000000, 99999999) . "_" . rand(10000000, 99999999) . "_" . $nameImage;
    }

    public static function deleteFileInPublicFolder($nameFile)
    {
        if (file_exists(public_path('image_upload/images/' . $nameFile))) {
            Log::info('delete image in server');
            unlink(public_path('image_upload/images/' . $nameFile));
        }
    }

    public static function deleteImageInCdn($deleteKey)
    {
        $end_ponit = 'https://api.imgur.com/3/image';

        $client = new Client();
        $request = $client->request(
            'DELETE',
            $end_ponit . '/' . $deleteKey,
            [
                'headers' => [
                    'Authorization' => "Client-ID " . env('CLIENT_ID'), // post as anonymous
                ],
            ]
        );
        $response = (string)$request->getBody();
        $jsonResponse = json_decode($response);
        return $jsonResponse->status;
    }

}

