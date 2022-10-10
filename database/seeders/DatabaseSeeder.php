<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'Mochamad Adi M. R.',
      'username' => 'moch.adi62',
      'email' => 'mmochamadadi23gmail.com',
      'password' => Hash::make('Hahahihi123'),
      'role' => 1,
      'remember_token' => Str::random(10),
      'email_verified_at' => now()
    ]);

    // User::create([
    //   'name' => 'Siti Hanifa',
    //   'username' => 'siti.hanifa127',
    //   'email' => 'sitihanifa23gmail.com',
    //   'password' => Hash::make('Hahahihi123'),
    //   'role' => 1,
    //   'remember_token' => Str::random(10),
    //   'email_verified_at' => now()
    // ]);

    User::factory(3)->create();

    Category::create([
      'name' => 'Web Programming',
      'slug' => 'web-programming',
    ]);

    Category::create([
      'name' => 'Android Programming',
        'slug' => 'android-programming',
    ]);

    Category::create([
      'name' => 'Java Programming',
      'slug' => 'java-programming',
    ]);

    Post::factory(20)->create();
  }
}
