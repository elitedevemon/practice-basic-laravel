<?php

namespace App\Http\Controllers\invokable\events;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class modelEventControl extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    $post = Post::findOrFail(93);
    $post->update([
      'title' => 'This is example updating post 2',
      'post' => 'This is example updating post 2'
    ]);
  }
}
