<?php

namespace App\Http\Controllers\invokable\relationship;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class hasOneThroughController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    return Student::with('school')->with('schoolPhoneNumber')->get();
  }
}
