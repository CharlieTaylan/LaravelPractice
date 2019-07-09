<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'Skills';
    public $primarykey = 'id';
    public $timestamps = true;
}
