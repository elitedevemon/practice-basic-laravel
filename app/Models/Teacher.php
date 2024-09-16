<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Teacher extends Model
{
  use HasFactory;
  
  /**
   * guarded
   * creating guarded global value to make inputs unlocked
   * @var array
   */
  protected $guarded = [];

  /**
   * Method comment
   * morph relation with @var comment table
   * @return MorphOne
   */
  public function comment(): MorphMany{
    return $this->morphMany(Comment::class, 'commentable');
  }
  
  /**
   * Method image
   * morphOne relation with @var images table
   * @return MorphOne
   */
  public function image(): MorphOne{
    return $this->morphOne(Image::class, 'imageable');
  }
  
  /**
   * Method post
   * create morphMany relation with @var posts table
   * @return MorphMany
   */
  public function post(): MorphMany{
    return $this->morphMany(Post::class, 'postable');
  }
  
  /**
   * Method reply
   * create relation with @var replies table
   * @return MorphMany
   */
  public function reply(): MorphMany{
    return $this->morphMany(Reply::class, 'replyable');
  }
}
