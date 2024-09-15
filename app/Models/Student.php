<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
}
