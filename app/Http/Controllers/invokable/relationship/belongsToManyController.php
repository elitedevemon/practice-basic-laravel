<?php

namespace App\Http\Controllers\invokable\relationship;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Student;
use Illuminate\Http\Request;

class belongsToManyController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $students = Student::get();
    foreach ($students as $student) {
      echo $student->name.'<br/>';
      echo $student->email.'<br/>';
      foreach ($student->role as $role) {
        echo $role->role . '/';
      }
      echo "<hr/>";
    }
  }
}
