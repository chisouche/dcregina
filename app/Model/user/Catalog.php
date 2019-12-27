<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
  protected $table = 'catalogs';

  protected $fillable =
  ['title','content','slug','staus','created_at','updated_at'];


}
