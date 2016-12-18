<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
}
