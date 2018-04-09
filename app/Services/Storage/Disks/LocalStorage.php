<?php

namespace App\Services\Storage\Disks;

use App\Services\Storage\Contracts\StorageInterface;
use Illuminate\Support\Facades\Storage;

class LocalStorage implements StorageInterface
{
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }public function get($fileName)
    {
        return Storage::disk('public')->url($fileName);

    }
    public function save($file , $directory ='',$access = 'public')
    {
        try{
            return Storage::disk('public')->putFile($directory , $file, $access);
        }
        catch (\Exception $exception){
            return $exception;
        }
    }
    public function listFiles()
    {
        return Storage::disk('public')->files();
    }

}