<?php
namespace App\Repositories;

interface CountRepositoryInterface {
    public function aim($id);

    public function create($data);

    public function update();

    public function test();

}