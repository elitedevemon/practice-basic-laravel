<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends Model
{
  use HasFactory;

  protected $guarded = [];
  
  /**
   * Method postable
   * create morphTo relation from getting value from @var students and @var teachers table
   * @return MorphTo
   */
  public function postable(): MorphTo{
    return $this->morphTo();
  }
  
  /**
   * Method image
   * morphOne relation with @var images table
   * @return MorphOne
   */
  public function image(): MorphOne{
    return $this->morphOne(Image::class, 'imageable');
  }
}
