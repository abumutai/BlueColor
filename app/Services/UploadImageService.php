<?php

namespace App\Services;

use Intervention\Image\Facades\Image;


class UploadImageService{
    public function upload($folder,$image){
        $image_name=$folder.'/'.time().'.'.$image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->resize(300,300);
        $img->save(public_path("uploads/".$image_name));

        return 'uploads/'.$image_name;
    }
}