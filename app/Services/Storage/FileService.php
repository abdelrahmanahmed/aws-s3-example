<?php


namespace App\Services\Storage;

use App\Services\Storage\Contracts\StorageInterface;
use App\Repositories\Contracts\FileRepositoryInterface;
class FileService
{
    private $storageInterface;
    private $FileRepositoryInterface;

    public function __construct(StorageInterface $storageInterface,FileRepositoryInterface $FileRepositoryInterface)
    {
        $this->storageInterface        = $storageInterface;

        $this->FileRepositoryInterface = $FileRepositoryInterface;
    }

    public function getAll(){

        $result = $this->FileRepositoryInterface->getAll();
        foreach ($result as $key =>$file){
            $result[$key]['url'] =$this->storageInterface->get($file['file']);
        }
        return $result;

    }
    public function store($request){

        $fileName        =  $this->storageInterface->save($request['file'],NULL,'public');

        $request['file'] = $fileName;

        return $this->FileRepositoryInterface->create($request);
    }



}