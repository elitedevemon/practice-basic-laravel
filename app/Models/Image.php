<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
  use HasFactory;

  protected $guarded = [];
  
  /**
   * Method imageable
   * morphTo relation with @var students table and @var teachers table as well as @var posts table
   * @return MorphTo
   */
  public function imageable(): MorphTo{
    return $this->morphTo();
  }
}
