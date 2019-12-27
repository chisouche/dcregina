<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable =
  ['name','image','description','catalog','category','slug','owner','price','created_at','updated_at'];


    public function category()
    {
      return $this->belongsTo('App\Model\user\Category','category_id');
    }

  /*  public function tags()
    {
      return $this->belongsToMany('App\Model\user\Tag','product_tags','tag_id','product_id');
    }*/

    public function getRouteKeyName()
    {

      return 'slug';
    }
}
