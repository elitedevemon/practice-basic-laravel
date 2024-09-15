<?php

namespace App\Http\Controllers\invokable\relationship;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Student;
// use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class hasOneController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    /**
     * hasOne relationship in Eloquent ORM
     * * with, withWhereHas, whereHas
     */
    Student::withWhereHas('contact', function ($query): void {
      $query->where('phone', '+1-571-519-4053');
    })->get();

    Contact::with('student')->get();
    $student = Student::create([
      'name' => 'MD EMON HASSAN',
      'email' => 'elitedevemon@gmail.com',
      'city_id' => 2,
    ]);

    $student->contact()->create([
      'phone' => '01701297434',
      'address' => 'Kushtia, Khulna, Dhaka, Bangladesh',
    ]);

    Student::findOrFail(13)->delete();
    return "Data has been deleted successfully";
  }
}
