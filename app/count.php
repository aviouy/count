<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table = 'count_data';
    protected $primaryKey = 'article_id';
    protected $guarded = [];
}
