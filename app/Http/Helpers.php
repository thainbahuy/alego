<?php

use Illuminate\Http\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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

    public static function deleteFileInPublicFolder($nameFile){
        if(file_exists(public_path('image_upload/images/'.$nameFile))){
            Log::info('delete image in server');
            unlink(public_path('image_upload/images/'.$nameFile));
        }
    }

}

