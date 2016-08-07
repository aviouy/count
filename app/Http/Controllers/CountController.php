<?php

namespace App\Http\Controllers;

use App\Http\Model\Count;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Symfony\Component\VarDumper\Tests\Caster\CasterTest;

class CountController extends Controller
{
    public function index(){
        $input = Input::all();
        $article = Count::find($input['project_id']);
        if($article){
            //echo $article->project_name;
            $article->project_count += 1;
            $re = $article->update();
            if($re){
                $data = [
                    'status' => 1,
                ];
            }else{
                $data = [
                    'status' => 0,
                ];
            }
            return $data;
        }
    }
}
