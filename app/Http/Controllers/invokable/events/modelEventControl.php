<?php

namespace App\Http\Controllers\invokable\events;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Student;
use App\Trait\ImageTrait;
use Illuminate\Http\Request;

class modelEventControl extends Controller
{
  use ImageTrait;
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $student = Student::findOrFail(1);
    $student->post()->create([
      'title' => fake()->words(2, true),
      'post' => fake()->sentences(2, true)
    ]);
    return "post has been added";
    // $post = Post::findOrFail(93);
    // $post->update([
    //   'title' => 'This is example updating post 2',
    //   'post' => 'This is example updating post 2'
    // ]);
  }
}
