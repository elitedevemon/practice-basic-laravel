<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 10; $i++) { 
      City::create([
        'city_name' => fake()->city(),
        'created_at' => now(),
        'updated_at' => now()
      ]);
    }
  }
}
