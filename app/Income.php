<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
   protected $table = 'income';
   //public $timestamps = false;
   protected $fillable = ['name', 'type', 'amount', 'date'];
   public $timestamps = false;
}
