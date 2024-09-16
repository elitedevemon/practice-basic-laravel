<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
{
  use HasFactory;
  protected $guarded = [];
 
  /**
   * Method contact
   * relation with @var contact table
   * @return HasOne
   */
  public function contact(): HasOne
  {
    return $this->hasOne(Contact::class);
  }
  
  /**
   * Method roles
   * relation with @var roles table using @var user_roles table
   * @return BelongsToMany
   */
  public function role(): BelongsToMany{
    return $this->belongsToMany(Role::class, 'user_roles');
  }
  
  /**
   * Method schoolPhoneNumber
   * relation with @var school_contacts table through @var schools table
   * @return HasOneThrough
   */
  public function schoolPhoneNumber(): HasOneThrough{
    return $this->hasOneThrough(SchoolContacts::class, School::class);
  }
  
  /**
   * Method school
   * One to One relation with @var schools table
   * @return HasOne
   */
  public function school(): HasOne{
    return $this->hasOne(School::class);
  }
  
  /**
   * Method comment
   * morph relation with @var comments table
   * @return MorphOne
   */
  public function comment(): MorphOne{
    return $this->morphOne(Comment::class, 'commentable');
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
}
