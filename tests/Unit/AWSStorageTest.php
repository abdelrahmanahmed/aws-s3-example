<?php

namespace Tests\Unit;

use App\Services\Storage\Disks\AWSS3;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AWSStorageTest extends TestCase
{
    protected $awss3;
    public function setUp()
    {
        $this->awss3 = new AWSS3();
        parent::setUp();

    }
    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function test_store_file()
    {
        $file = UploadedFile::fake()->image('file.jpg');

        $result = $this->awss3->save($file);

        $this->assertEquals(true,is_string($result));
    }

    public function test_list_files(){

        $result = $this->awss3->listFiles();

        $this->assertEquals(true,is_array($result));
    }
}