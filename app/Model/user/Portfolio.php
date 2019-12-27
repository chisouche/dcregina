<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
  protected $table = 'portfolios';

  protected $fillable =
  ['name','image','description','category','slug','details','created_at','updated_at'];

  public function category()
  {
    return $this->belongsTo('App\Model\user\Category','category_id');
  }

}
