<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    return Student::join('cities', 'students.city_id', '=', 'cities.id')
            ->select('students.id', 'students.name', 'students.email', 'cities.city_name')
            ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
            ->groupBy('city_id')
            ->get();
  }
}
