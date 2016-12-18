<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';
    protected $primaryKey = 'conf_id';
    public $timestamps = false;
}
