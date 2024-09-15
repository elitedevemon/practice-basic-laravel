<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 0; $i < 10; $i++) {
      Contact::create([
        'phone' => fake()->phoneNumber(),
        'address' => fake()->address(),
        'student_id' => mt_rand(1, 10),
      ]);
    }
  }
}
