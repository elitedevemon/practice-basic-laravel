<?php

namespace App\Http\Controllers\invokable\relationship;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class morphToController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    // for ($i=1; $i < 10; $i++) { 
    //   $student = Student::findOrFail($i);
    //   $teacher = Teacher::findOrFail($i);
    //   try {
    //     $student->comment()->create([
    //       'comment' => fake()->text()
    //     ]);
    //     $teacher->comment()->create([
    //       'comment' => fake()->text()
    //     ]);
    //   } catch (\Throwable $th) {
    //     return $th;
    //   }
    // }
    $student = Student::findOrFail(2);
    return $student->comment->delete();
  }
}
