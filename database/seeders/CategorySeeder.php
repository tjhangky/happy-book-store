<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'Fiction',
        ]);
        Category::create([
            'category' => 'Science',
        ]);
        Category::create([
            'category' => 'Computer',
        ]);
        Category::create([
            'category' => 'Improvement',
        ]);
        Category::create([
            'category' => 'Cooking',
        ]); 
    }
}
