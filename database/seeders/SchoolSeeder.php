<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 5; $i++) { 
      School::create([
        'school_name' => fake()->name(),
        'student_id' => random_int(1, 10)
      ]);
    }
  }
}
