<?php
namespace App\Repositories;



use App\Count;

class DbCountRepository implements CountRepositoryInterface {

    public function aim($id)
    {
        return Count::find($id);
    }

    public function create($data)
    {
        return Count::create($data);
    }

    public function update()
    {

    }

    public function test()
    {
        // TODO: Implement test() method.
        return Count::all();
    }

}