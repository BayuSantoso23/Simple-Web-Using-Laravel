<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // By default
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Manually Making seeder
        // $user1 = User::create([
        //     'name' => 'Bayu Santoso',
        //     'username' => 'Bayu',
        //     'email' => 'BayuSantos@gemail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Category 1',
        //     'slug' => 'category-1'
        // ]);

        // Post::create([
        //     'title' => 'Article title 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'Article-title-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, magnam placeat consequuntur porro minima, 
        //                cumque impedit delectus ducimus vel quisquam nam officia laboriosam illum neque rerum mollitia odit quam eius?'
            
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            // Calling all data from Category and User table
            Category::all(),
            User::all()
        ])->create();
    }
}