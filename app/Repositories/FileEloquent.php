<?php
/**
 * Created by PhpStorm.
 * User: wahdan
 * Date: 09/04/18
 * Time: 06:15 م
 */

namespace App\Repositories;


use App\Models\File;
use App\Repositories\Contracts\FileRepositoryInterface;

abstract class FileEloquent implements FileRepositoryInterface
{
    protected $model;

    public function __construct(File $model)
    {
     $this->model= $model;
    }

    public function create(array $inputs)
    {
       return $this->model->create($inputs);
    }

    public function getAll()
    {
        return $this->model->all()->toArray();
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);

    }


}