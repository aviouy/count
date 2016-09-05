<?php
namespace App\Service;

use App\Repositories\CountRepositoryInterface;

class CountService
{
    public function __construct(CountRepositoryInterface $count)
    {
        $this->Count = $count;
    }

    public function check($input){
        $data = $this->Count->aim($input['article_id']);
        if($data){
            $data->article_count += 1;
            if($data->update()){
                $message = array(
                    'code' => '1',
                    'msg' => 'The article ' .$data->article_name. ' has been successfully read '.$data->article_count.' times',
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
}