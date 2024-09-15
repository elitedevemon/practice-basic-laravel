<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
  use HasFactory;
  protected $guarded = [];
  
  /**
   * Method student
   * bind with student column and return all of the according the city
   * @return HasMany
   */
  public function student(): HasMany{
    return $this->hasMany(Student::class);
  }
}
