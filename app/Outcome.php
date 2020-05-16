<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    protected $table = 'outcome';
    //public $timestamps = false;
    protected $fillable = ['name', 'type', 'amount', 'date'];
    public $timestamps = false;
}
