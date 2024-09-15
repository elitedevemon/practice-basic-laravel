<?php

namespace App\Http\Controllers\invokable\relationship;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class hasManyController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $city = City::with('student')->get();
    foreach ($city as $c) {
      echo $c->city_name.':'. count($c->student).'<br/>';
    }
  }
}
