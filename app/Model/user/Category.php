<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable =
    ['name','image','description','slug','remember-token'.'created_at','updated_at'];


    public function product()
    {
      return $this->hasMany('App\Model\user\Product','category_id');
    }

    public function portfolio()
    {
      return $this->hasMany('App\Model\user\Portfolio','category_id');
    }
}
