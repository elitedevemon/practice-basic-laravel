<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\View\Components\laravelComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class checkComponentController extends Controller
{
  public function index(){
    $posts = Post::latest()->first();
    $lc = new laravelComponent($posts);
    return $lc->render();
    // return View::make('components.laravel-component')->with('name', $name)->render();
  }
}
