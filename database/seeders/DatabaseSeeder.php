<?php

namespace Database\Seeders;

// use App\Models\SchoolContacts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      CitySeeder::class,
      StudentSeeder::class,
      LibrarySeeder::class,
      TeacherSeeder::class,
      ContactSeeder::class,
      RoleSeeder::class,
      UserRoleSeeder::class,
      SchoolSeeder::class,
      SchoolContactsSeeder::class
    ]);

    // User::factory()->create([
    //   'name' => 'Test User',
    //   'email' => 'test@example.com',
    // ]);
  }
}
