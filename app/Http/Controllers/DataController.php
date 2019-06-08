<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
  public function province()
  {
    return response()->file(storage_path('app/json/provinces.json'));
  }

  public function city()
  {
    return response()->file(storage_path('app/json/cities.json'));
  }


}
