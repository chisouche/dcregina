<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Portfolio3Controller extends Controller
{
  public function index()
  {
    return view('user.category3');
  }
}
