<?php

namespace App\Providers;

use App\Models\CompanyList;
use App\Models\PrimaryInfo;
use Illuminate\Support\ServiceProvider;
use Image;

class MyHelperProvider extends ServiceProvider
{


    static public function photoUpload($photoData, $folderName, $width = null, $height = null)
    {
        $photoOrgName = self::slugify($photoData->getClientOriginalName());
        $photoType = $photoData->getClientOriginalExtension();

        //$fileType = $photoData->getClientOriginalName();
        $fileName = substr($photoOrgName, 0, -4) . date('d-m-YH-i-s') . '.' . $photoType;
        $path2 = $folderName . date('Y/m/d');
        //return $path2;
        if (!is_dir($path2)) {
            mkdir("$path2", 0777, true);
        }
        if ($width != null && $height != null) { // width & height mention-------------------
            $img = \Image::make($photoData);
            $img->resize($width, $height);
            $img->save($folderName . date('Y/m/d/') . $fileName);
            return $photoUploadedPath = $folderName . date('Y/m/d/') . $fileName;
        } elseif ($width != null) { // only width mention-------------------
            $img = \Image::make($photoData);
            $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($folderName . date('Y/m/d/') . $fileName);
            return $photoUploadedPath = $folderName . date('Y/m/d/') . $fileName;
        } else {
            $img = \Image::make($photoData);
            $img->save($folderName . date('Y/m/d/') . $fileName);
            return $photoUploadedPath = $folderName . date('Y/m/d/') . $fileName;
        }


    }

    static public function fileUpload($filedata, $folderName)
    {

        $fileType = $filedata->getClientOriginalExtension();
        $fileName = rand(1, 1000) . date('dmyhis') . "." . $fileType;
        $path2 = $folderName . date('Y/m/d');
        //return $path2;
        if (!is_dir($path2)) {
            mkdir("$path2", 0777, true);
        }
        $img = move(public_path($filedata) . $folderName);
        //$img->resize(400, 330);
        $img->save($folderName . date('Y/m/d/') . $fileName);
        return $photoUploadedPath = $folderName . date('Y/m/d/') . $fileName;

    }

    //const baseDir = public_path('uploads');

    /**
     * image upload Method
     * @param Request $request
     * @param $image
     * @param $path
     * @param int $width
     * @param int $height
     * @return array
     */
    public static function imageUpload($request, $image, $path, $width = 320, $height = 240)
    {
        $baseDir = public_path('uploads/' . $path);

        $file = $request->file($image);
        $extension = $file->getClientOriginalExtension();

        $ImageUpload = Image::make($file);
        $originalPath = $baseDir . 'feature/';
        $fileName = time() . rand(11111111, 99999999) . '.' . $extension;

        $featurePath = $originalPath . $fileName;
        $ImageUpload->save($featurePath);

        $thumbnailPath = $baseDir . 'thumbnail/' . $fileName;
        $ImageUpload->resize($width, $height);
        $ImageUpload->save($thumbnailPath);
        return [
            'file_name' => $fileName,
            'base_dir' => $baseDir,
            'save_path' => $path,
            'feature_path' => $featurePath,
            'thumbnail_path' => $thumbnailPath,
            'extension' => $extension,
            'saved_on' => date('Y-m-d H:i:s')
        ];
    }

}
