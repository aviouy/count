<?php

namespace App\Http\Controllers;

use App\count;
use App\Repositories\CountRepositoryInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function __construct(CountRepositoryInterface $count)
    {
        $this->Count = $count;
    }

    public function index(Request $request){
        $input = $request->except(['_token']);
        $data = $this->Count->aim($input['article_id']);
        if($data){
            $data->article_count += 1;
            if($data->update()){
                $message = array(
                    'code' => '1',
                    'msg' => 'The article has been successfully read '.$data->article_count.' times',
                    'count' => $data->article_count,
                );
            }
        }else{
            if($this->Count->create($input)){
                $message = array(
                    'code' => '2',
                    'msg' => 'A new project was created',
                );
            }
        }
        return $message;
    }

    public function test(){
        $data = count::find(1);
        dd($data);
    }
}
