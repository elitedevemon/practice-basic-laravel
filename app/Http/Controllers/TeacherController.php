<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    /**
     * @var  $students 
     * testing the union method in query builder
     */
    $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')
      ->select('students.name', 'students.email', 'cities.city_name');
    Teacher::union($students)
      ->join('cities', 'teachers.city_id', '=', 'cities.id')
      ->select('teachers.name', 'teachers.email', 'cities.city_name')
      ->inRandomOrder()
      ->get();

    /**
     * @var $status
     * @var $status2
     * * method when()
     * testing when method in query builder
     */
    $status = null;
    $status2 = 1;
    return Teacher::when($status, function($query){
      $query->where('id', 1);
    })
    ->when($status2, function($query){
      $query->where('city_id', 7);
    })
    ->get();
  }
}
