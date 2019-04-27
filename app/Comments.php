<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    public $timestamps = false;
    public function post_id()
    {
        return $this->belongsTo('App\Post','id');
    }
}
