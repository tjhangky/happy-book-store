<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'category_id' => 1,
            'title' => 'Harry Potter and the Philosopher\'s Stone',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'The Hunger Games',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Percy Jackson and the Olympians',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'The Hobbit, or There and Back Again',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Howl\'s Moving Castle',
        ]);

        
        Book::create([
            'category_id' => 2,
            'title' => 'The Theory of Everything',
        ]);

        Book::create([
            'category_id' => 2,
            'title' => 'The Universe in a Nutshell',
        ]);

        Book::create([
            'category_id' => 2,
            'title' => 'The Hitchhiker\'s Guide to the Galaxy',
        ]);

        Book::create([
            'category_id' => 2,
            'title' => 'The Science Book',
        ]);
        

        Book::create([
            'category_id' => 3,
            'title' => 'Introduction to Algorithms',
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'The C Programming Language',
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'The Art of Computer Programming',
        ]);

        Book::create([
            'category_id' => 3,
            'title' => 'Cracking the Coding Interview',
        ]);

        Book::create([
            'category_id' => 4,
            'title' => 'The 7 Habits of Highly Effective People',
        ]);

        Book::create([
            'category_id' => 4,
            'title' => 'Think and Grow Rich',
        ]);
        
    }
}
