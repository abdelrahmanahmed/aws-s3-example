<?php


namespace App\Repositories\Contracts;


interface FileRepositoryInterface
{

    public function create(array $inputs);
    public function getAll();
    public function get($id);
    public function delete($id);
}