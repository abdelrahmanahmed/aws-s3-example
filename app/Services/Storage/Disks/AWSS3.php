<?php

namespace App\Services\Storage\Disks;

use App\Services\Storage\Contracts\StorageInterface;
use Illuminate\Support\Facades\Storage;

class AWSS3 implements StorageInterface
{
    public function __construct()
    {

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    public function get($fileName)
    {
       return Storage::disk('s3')->url($fileName);
    }
    public function save($file , $directory ='',$access = 'public')
    {
        try{
            return Storage::disk('s3')->putFile($directory , $file, $access);
        }
        catch (\Exception $exception){
            return $exception;
        }
    }
    public function listFiles()
    {
        return Storage::disk('s3')->files();
    }

}