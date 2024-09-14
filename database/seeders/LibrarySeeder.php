<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 100; $i++) { 
      Library::create([
        'book_name' => fake()->randomLetter(),
        'issue_date' => fake()->dateTime(),
        'status' => true,
        'student_id' => random_int(1, 100),
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
