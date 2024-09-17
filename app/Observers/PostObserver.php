<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
  /**
   * Handle the Post "creating" event.
   */
  public function creating(Post $post): void
  {
    echo "creating the post <br/>";
  }

  /**
   * Handle the Post "created" event.
   */
  public function created(Post $post): void
  {
    echo "created the post";
  }

  /**
   * Handle the Post "updating" event.
   */
  public function updating(Post $post): void
  {
    echo "$post->id updating the post <br/>";
  }

  /**
   * Handle the Post "updated" event.
   */
  public function updated(Post $post): void
  {
    echo "$post->id updated the post";
  }

  /**
   * Handle the Post "deleted" event.
   */
  public function deleted(Post $post): void
  {
    //
  }

  /**
   * Handle the Post "restored" event.
   */
  public function restored(Post $post): void
  {
    //
  }

  /**
   * Handle the Post "force deleted" event.
   */
  public function forceDeleted(Post $post): void
  {
    //
  }
}
