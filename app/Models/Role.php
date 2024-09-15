<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
  use HasFactory;

  
  /**
   * Method roles
   * relation with @var students table using @var user_roles table
   * @return BelongsToMany
   */
  public function student(): BelongsToMany{
    return $this->belongsToMany(Student::class, 'user_roles');
  }
}
