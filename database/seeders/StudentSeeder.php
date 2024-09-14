<?php

namespace Database\Seeders;

use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 1000; $i++) { 
      Student::create([
        'name' => fake()->name(),
        'email' => fake()->safeEmail(),
        'city_id' => random_int(1, 10),
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
