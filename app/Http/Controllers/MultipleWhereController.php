<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MultipleWhereController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    //where, whereBetween, whereNotBetween, whereIn, whereNotIn, whereDate, whereDay, whereTime, whereMonth, whereYear, I can use Not and doesnt methods here.
    return Student::inRandomOrder()->take(3)->skip(2)->get();
  }
}
