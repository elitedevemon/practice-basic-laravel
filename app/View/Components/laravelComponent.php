<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class laravelComponent extends Component
{



  /**
   * Create a new component instance.
   */
  public function __construct(public object $posts)
  {

  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.laravel-component')->with('posts', $this->posts);
  }
}
