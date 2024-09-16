<?php

namespace App\Http\Controllers\resource\relationship;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class morphToResourceController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $student = Student::with('comment')->get();
    // $teacher = Teacher::with('comment')->get();
    $student = Student::findOrFail(2);
    $teacher = Teacher::findOrFail(2);
    return $teacher->comment;
  }

  /**
   * Method studentImage
   * create student image with morph relation
   * @param $student_id
   * @return void
   */
  public function studentImage($student_id): void
  {
    $students = Student::get();
    foreach ($students as $student) {
      $student->image()->create([
        'image' => 'student_' . $student->id . '.jpg'
      ]);
    }
  }

  /**
   * Method teacherImage
   * create teacher image with morph relation
   * @param $teacher_id
   * @return void
   */
  public function teacherImage($teacher_id): void
  {
    $teachers = Teacher::get();
    foreach ($teachers as $teacher) {
      $teacher->image()->create([
        'image' => 'teacher_' . $teacher->id . '.jpg'
      ]);
    }
  }

  /**
   * Method createStudentPost
   * create post using morph relation from @var students table
   * @return void
   */
  public function createStudentPost()
  {
    $students = Student::get();
    foreach ($students as $student) {
      for ($i = 1; $i < random_int(2, 5); $i++) {
        $post = $student->post()->create([
          'title' => fake()->words(3, true),
          'post' => fake()->paragraphs(2, true)
        ]);
        $post->image()->create([
          'image' => 'student_post_' . $post->id . '.jpg'
        ]);
      }
    }
  }

  /**
   * Method createTeacherPost
   * create post using morph relation from @var teachers table
   * @return void
   */
  public function createTeacherPost()
  {
    $teachers = Teacher::get();
    foreach ($teachers as $teacher) {
      for ($i = 1; $i < random_int(2, 5); $i++) {
        $post = $teacher->post()->create([
          'title' => fake()->words(3, true),
          'post' => fake()->paragraphs(2, true)
        ]);

        $post->image()->create([
          'image' => 'student_post_' . $post->id . '.jpg'
        ]);
      }
    }
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    try {
      $this->studentImage(1);
      $this->teacherImage(1);
      $this->createStudentPost();
      $this->createTeacherPost();
      return "Everything is fine";
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
