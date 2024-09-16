<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
  use HasFactory;

  protected $guarded = [];
  
  /**
   * Method commentable
   * morph relation with @var student and @var teacher table
   * @return MorphTo
   */
  public function commentable(): MorphTo{
    return $this->morphTo();
  }
}
