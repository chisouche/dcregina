<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Product;
class ProductController extends Controller
{
  public function product(product $product)
  {

    return view('user.products',compact('product'));
  }
}
