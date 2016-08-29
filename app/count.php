<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class count extends Model
{
    protected $table = 'count_data';
    protected $primaryKey = 'article_id';
    protected $guarded = [];
}
