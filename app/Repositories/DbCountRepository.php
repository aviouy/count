<?php
namespace App\Repositories;

use App\count;

class DbCountRepository implements CountRepositoryInterface {

    public function aim($id)
    {
        return count::find($id);
    }

    public function create($data)
    {
        return count::create($data);
    }

    public function update()
    {

    }
}