<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table = 'count_project';
    protected $primaryKey='project_id';
    public $timestamps = false;
}
