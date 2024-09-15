<?php

namespace Database\Seeders;

use App\Models\SchoolContacts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolContactsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 5; $i++) { 
      SchoolContacts::create([
        'phone' => fake()->phoneNumber(),
        'school_id' => random_int(1, 5)
      ]);
    }
  }
}
