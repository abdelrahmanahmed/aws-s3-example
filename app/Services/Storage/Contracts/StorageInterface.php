<?php

namespace App\Services\Storage\Contracts;

interface StorageInterface
{
    public function listFiles();
    public function save($file,$directory,$access);
    public function delete($id);
    public function get($fileName);
}