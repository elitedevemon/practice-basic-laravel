<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
  use HasFactory;
  
  /**
   * guarded
   *
   * @var array
   */
  protected $guarded = [];
  
  /**
   * Method student
   * It has One to One relationship with @param students table
   * @return BelongsTo
   */
  public function student(): BelongsTo{
    return $this->belongsTo(Student::class);
  }
}
