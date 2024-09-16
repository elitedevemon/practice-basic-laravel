<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reply extends Model
{
  use HasFactory;

  protected $guarded = [];
  
  /**
   * Method replyable
   * create morphTo relation with @var students table and @var teachers table which connected to @var comments table
   * @return MorphTo
   */
  public function replyable(): MorphTo{
    return $this->morphTo();
  }
}
