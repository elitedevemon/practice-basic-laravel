<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
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
  
  /**
   * Method comment
   * morphMany relation with @var comments table
   * @return MorphMany
   */
  public function comment(): MorphMany{
    return $this->morphMany(Comment::class, 'commentable');
  }
  
  /**
   * Method booted
   * this is lifecycle method
   * @return void
   */
  // protected static function booted(): void
  // {
  //   self::creating(function($post){
  //     echo "post creating";
  //   });
  //   self::created(function(){
  //     echo "post created";
  //   });
  // }
}
