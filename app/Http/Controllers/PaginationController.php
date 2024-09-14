<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $students = Student::paginate(10)->fragment('students');
    return view('pagination.pagination', compact('students'));
  }
}
