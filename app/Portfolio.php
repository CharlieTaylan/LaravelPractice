<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Table name
    Protected $table = 'Portfolios';
    // Primary Key
    public $primarykey = 'id';
    // Timesamps
    public $timestamps = true;
}
