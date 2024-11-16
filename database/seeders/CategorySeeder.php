<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Category 3',
            'slug' => 'category-3',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Category 4',
            'slug' => 'category-4',
            'color' => 'yellow'
        ]);

    }    
}
