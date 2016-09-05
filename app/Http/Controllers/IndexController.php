<?php

namespace App\Http\Controllers;



use App\Count;
use App\Repositories\CountRepositoryInterface;
use App\Service\CountService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(CountService $count)
    {
        $this->Count = $count;
    }

    public function index(Request $request){
        $input = $request->except(['_token']);
        $message = $this->Count->check($input);
        return $message;
    }
}
