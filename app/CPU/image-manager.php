<?php

namespace App\CPU;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageManager
{
    public static function upload(string $dir, string $format, $image = null)
    {
        if($image != null){

          $fileName       = rand()."." .$image->getClientOriginalExtension();
          $image_path     = $image->move(public_path('assets/app/public/'.$dir), $fileName);
          $imageName      =  $fileName;
        } else {
          $imageName    = 'def.png';
        }

        return $imageName;
    }

    public static function update(string $dir, $old_image, string $format, $image = null)
    {

        if($image){

          $fileName       = rand()."." .$image->getClientOriginalExtension();
          $image_path     = $image->move(public_path('assets/app/public/'.$dir), $fileName);
          $imageName      =  $fileName;
          return $imageName;
        } 
    }

    public static function delete($full_path)
    {
        if (Storage::disk('public')->exists($full_path)) {
            Storage::disk('public')->delete($full_path);
        }

        return [
            'success' => 1,
            'message' => 'Removed successfully !'
        ];

    }
}
