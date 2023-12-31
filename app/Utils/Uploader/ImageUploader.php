<?php

namespace App\Utils\Uploader;

use App\Models\FileManager;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Image;

class ImageUploader
{
    private static $image;

    private $folder;

    private static $extension = 'webp';

    /**
     * Initialize image maker
     *
     * @param  object  $image
     * @return  static  $this
     */
    public static function make($image)
    {
        // Make image
        $img = Image::make($image);

        // Set selected image
        self::$image = $img;

        // Return this
        return new self;
    }

    /**
     * Set folder to upload this image
     *
     * @param  string  $folder
     * @return object
     */
    public function folder($folder)
    {
        // Check if class exists
        $path = public_path("storage/$folder");

        // Create this folder if not exists
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0755, true, true);
        }

        // Set folder
        $this->folder = $folder;

        // Return this class
        return $this;
    }

    /**
     * Set image width
     *
     * @param  int  $width
     * @return object
     */
    public function resize($width, $height = null)
    {
        // Get selected image
        $image = ImageUploader::$image;

        // Resize image
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        // Return this
        return $this;
    }

    /**
     * Resize image to given dimensions
     *
     * @param  int  $width
     */
    public function size($width, $height = null)
    {
        $image = ImageUploader::$image;

        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        return $this;
    }

    /**
     * Create file name for image instance
     */
    public static function fileName()
    {
        return uid(25) . '.' . self::$extension;
    }

    /**
     * store the image to s3 storage
     */
    public function toBucket($path)
    {
        $fileName = self::fileName();
        $filePath = "{$path}/{$fileName}";

        Storage::disk('s3')->put($filePath, ImageUploader::$image->encode());

        return $filePath;
    }

    /**
     * Set default extension
     *
     * @param  string  $extension
     */
    public function extension($extension)
    {
        self::$extension = $extension;

        return $this;
    }

    /**
     * Delete image from bucket
     */
    public static function deBucket($path)
    {
        Storage::disk('s3')->delete($path);
    }

    /**
     * delete image from bucket
     */
    public function unBucket($path)
    {
        Storage::disk('s3')->delete($path);
        return $this;
    }

    /**
     * Delete old file by id
     *
     * @param  int  $id
     * @return object
     */
    public function deleteById($id)
    {
        try {

            Schema::disableForeignKeyConstraints();
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');

            // Get file from file manager
            $file = FileManager::where('id', $id)->first();

            // Check if file exists
            if ($file) {

                // Get file local path
                $path = public_path("storage/$file->file_folder/$file->uid.$file->file_extension");

                // Check if file exists
                if (File::exists($path)) {
                    File::delete($path);
                }

                // Now delete from database
                $file->delete();
            }

            Schema::enableForeignKeyConstraints();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

            return $this;
        } catch (\Throwable $th) {
            return $this;
        }
    }

    /**
     * Upload selected file
     *
     * @return int
     */
    public function handle()
    {
        // Get image
        $image = ImageUploader::$image;

        // Generate unique file id
        $uid = uid();

        // Generate file name
        $name = $uid . '.' . self::$extension;

        // Get mime type
        $mime = $image->mime();

        // Set path
        $path = public_path("storage/$this->folder/$name");

        // Save image in local storage
        $image->save($path, 80, self::$extension);

        // Get uploaded file size
        $size = File::size($path);

        // Save file
        $file = new FileManager();
        $file->uid = $uid;
        $file->file_folder = $this->folder;
        $file->file_size = $size;
        $file->file_mimetype = $mime;
        $file->file_extension = self::$extension;
        $file->save();

        // Return file id
        return $file->id;
    }

    /**
     * Save image from url
     *
     * @param  string  $url
     * @return int
     */
    public static function fromUrl($url, $folder)
    {
        try {

            // Get image contents
            $contents = file_get_contents($url);

            // Generate unique file id
            $uid = uid();

            // Generate file name
            $name = "$uid.jpg";

            // Get mime type
            $mime = 'image/jpeg';

            // Set path
            $path = public_path("storage/$folder/$name");

            // Save image in local storage
            Storage::disk('custom')->put("$folder/$name", $contents);

            // Get uploaded file size
            $size = File::size($path);

            // Save file
            $file = new FileManager();
            $file->uid = $uid;
            $file->file_folder = $folder;
            $file->file_size = $size;
            $file->file_mimetype = $mime;
            $file->file_extension = 'jpg';
            $file->save();

            // Return file id
            return $file->id;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
