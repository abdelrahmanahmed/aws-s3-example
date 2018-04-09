<?php

namespace App\Services\Storage\Disks;

use App\Services\Storage\Contracts\StorageInterface;

class LocalStorageInterface implements StorageInterface
{
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }public function get($fileName)
    {
    }
    public function save($file , $directory ='',$access = 'public')
    {
        // TODO: Implement save() method.
    }public function listFiles()
    {
        // TODO: Implement listFiles() method.
    }

}