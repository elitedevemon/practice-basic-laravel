<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i=0; $i < 10; $i++) { 
      DB::table('user_roles')->insert([
        'student_id' => random_int(1, 10),
        'role_id' => random_int(1, 5)
      ]);
    }
  }
}
