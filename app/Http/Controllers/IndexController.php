<?php

namespace App\Http\Controllers;



use App\Count;
use App\Repositories\CountRepositoryInterface;
use App\Service\CountService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $count;

    public function __construct(CountService $count)
    {
        $this->$count = $count;

    }

    public function index(Request $request){
        $input = $request->except(['_token']);
        $message = $this->count->check($input);
        return $message;
    }
}
