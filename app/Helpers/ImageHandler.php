<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageHandler
{
    public static function getFileMetaData($file)
    {
        $dataFile['ext'] = $file->getClientOriginalExtension();
        $dataFile['type'] = $file->getClientMimeType();
        $dataFile['size'] = self::formatBytes($file->getSize());
        return $dataFile;
    }

    public static function formatBytes($size, $precision = 10)
    {
        $base = log($size, 1024);
        $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }

    public static function getUploadPath($type)
    {
        return 'uploads/' . $type . '/';
    }

    public static function ImageUrl($slug)
    {
        return url('/') . '/storage/uploads/services/' . $slug . '.png';
    }

    public static function ImageCompress($photo, $path, $width, $height = null)
    {
        // Define the maximum size of the compressed image in kilobytes
        $max_size_kb = 800;

        // Load the image using Intervention Image
        $img = Image::make($photo);

        // Get the current size of the image in kilobytes
        $current_size_kb = $photo->getSize() / 1024;

        // Calculate the compression ratio required to achieve the target size
        $ratio = sqrt($max_size_kb / $current_size_kb);

        // If the compression ratio is less than 1, resize the image and compress
        if ($ratio < 1) {
            // Resize the image
            $img->resize(
                $img->getWidth() * $ratio,
                $img->getHeight() * $ratio
            );

            // Compress the image
            $img->encode('jpg', 75);
        }

        if ($ratio > 1) {

            $img = Image::make($photo)->encode();
        }

        $img->resize(
            $width,$height
        );
        // Store the compressed image in storage
        Storage::disk('public')->put($path, (string)$img);

        return 0;
    }
}
