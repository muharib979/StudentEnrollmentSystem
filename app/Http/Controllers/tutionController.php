<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tutionController extends Controller
{
     public function tution()
    {
  return view('admin.tutionfee');
}
}
