<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'book_id' => '1',
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury',
            'year' => '1997',
            'description' => 'The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.',
        ]);

        Detail::create([
            'book_id' => '2',
            'author' => 'Suzanne Collins',
            'publisher' => 'Scholastic',
            'year' => '2008',
            'description' => 'The Hunger Games universe is a dystopia set in Panem, a North American country consisting of the wealthy Capitol and 13 districts in varying states of poverty. Every year, children from the first 12 districts are selected via lottery to participate in a compulsory televised battle royale death match called The Hunger Games.',
        ]);

        Detail::create([
            'book_id' => '3',
            'author' => 'Rick Riordan',
            'publisher' => 'Disney Hyperion',
            'year' => '2005',
            'description' => 'Twelve-year-old Percy Jackson is on the most dangerous quest of his life. With the help of a satyr and a daughter of Athena, Percy must journey across the United States to catch a thief who has stolen the original weapon of mass destruction — Zeus’ master bolt. Along the way, he must face a host of mythological enemies determined to stop him. Most of all, he must come to terms with a father he has never known, and an Oracle that has warned him of betrayal by a friend.',
        ]);

        Detail::create([
            'book_id' => '4',
            'author' => 'J. R. R. Tolkien',
            'publisher' => 'George Allen & Unwin',
            'year' => '1937',
            'description' => 'The Hobbit is set within Tolkien\'s fictional universe and follows the quest of home-loving Bilbo Baggins, the titular hobbit, to win a share of the treasure guarded by a dragon named Smaug. Bilbo\'s journey takes him from his light-hearted, rural surroundings into more sinister territory.',
        ]);


        Detail::create([
            'book_id' => '5',
            'author' => 'Diana Wynne Jones',
            'publisher' => 'Harper Trophy',
            'year' => '1986',
            'description' => 'Sophie has the great misfortune of being the eldest of three daughters, destined to fail miserably should she ever leave home to seek her fate. But when she unwittingly attracts the ire of the Witch of the Waste, Sophie finds herself under a horrid spell that transforms her into an old lady. Her only chance at breaking it lies in the ever-moving castle in the hills: the Wizard Howl\'s castle. To untangle the enchantment, Sophie must handle the heartless Howl, strike a bargain with a fire demon, and meet the Witch of the Waste head-on. Along the way, she discovers that there\'s far more to Howl—and herself—than first meets the eye.',
        ]);

        Detail::create([
            'book_id' => '6',
            'author' => 'Stephen W Hawking',
            'publisher' => 'Phoenix Books',
            'year' => '2006',
            'description' => 'Based on a series of lectures given at Cambridge University, Professor Hawking\'s work introduced "the history of ideas about the universe" as well as today\'s most important scientific theories about time, space, and the cosmos in a clear, easy-to-understand way.',
        ]);

        Detail::create([
            'book_id' => '7',
            'author' => 'Stephen W Hawking',
            'publisher' => 'Bantam Spectra',
            'year' => '2001',
            'description' => 'The Universe in a Nutshell is a 2001 book about theoretical physics by Stephen Hawking. It is generally considered a sequel and was created to update the public concerning developments since the multi-million-copy bestseller A Brief History of Time was published in 1988',
        ]);

        Detail::create([
            'book_id' => '8',
            'author' => 'Douglas Adams',
            'publisher' => 'HarperCollins',
            'year' => '1995',
            'description' => 'The broad narrative of Hitchhiker follows the misadventures of the last surviving man, Arthur Dent, following the demolition of the Earth by a Vogon constructor fleet to make way for a hyperspace bypass. Dent is rescued from Earth\'s destruction by Ford Prefect—a human-like alien writer for the eccentric, electronic travel guide The Hitchhiker\'s Guide to the Galaxy—by hitchhiking onto a passing Vogon spacecraft.',
        ]);

        Detail::create([
            'book_id' => '9',
            'author' => 'DK',
            'publisher' => 'Dorling Kindersley Limited',
            'year' => '2014',
            'description' => 'Part of the popular Big Ideas series, The Science Book explores the history of science, how scientists have sought to explain our incredible universe and how amazing scientific discoveries have been made.',
        ]);

        Detail::create([
            'book_id' => '10',
            'author' => 'Thomas H. Cormen',
            'publisher' => 'MIT Press',
            'year' => '1990',
            'description' => 'In the preface, the authors write about how the book was written to be comprehensive and useful in both teaching and professional environments. Each chapter focuses on an algorithm, and discusses its design techniques and areas of application. Instead of using a specific programming language, the algorithms are written in pseudocode. The descriptions focus on the aspects of the algorithm itself, its mathematical properties, and emphasize efficiency',
        ]);

        Detail::create([
            'book_id' => '11',
            'author' => 'Brian Kernighan',
            'publisher' => 'Prentice Hall',
            'year' => '1978',
            'description' => 'The book was central to the development and popularization of the C programming language and is still widely read and used today. Because the book was co-authored by the original language designer, and because the first edition of the book served for many years as the de facto standard for the language, the book was regarded by many to be the authoritative reference on C.',
        ]);

        Detail::create([
            'book_id' => '12',
            'author' => 'Donald Knuth',
            'publisher' => 'Addison-Wesley',
            'year' => '1968',
            'description' => 'The Art of Computer Programming is a comprehensive monograph written by the computer scientist Donald Knuth presenting programming algorithms and their analysis.',
        ]);

        Detail::create([
            'book_id' => '13',
            'author' => 'Gayle Laakmann McDowell',
            'publisher' => 'CareerCup',
            'year' => '2008',
            'description' => 'Cracking the Coding Interview: 189 Programming Questions and Solutions is a book by Gayle Laakmann McDowell about coding interviews. It describes typical problems in computer science that are often asked during coding interviews, typically on a whiteboard during job interviews at big technology companies such as Google, Apple, Microsoft, Amazon.com, Facebook and Palantir Technologies.',
        ]);

        Detail::create([
            'book_id' => '14',
            'author' => 'Stephen R. Covey',
            'publisher' => 'Free Press',
            'year' => '1989',
            'description' => 'Covey presents an approach to being effective in attaining goals by aligning oneself to what he calls "true north" principles based on a character ethic that he presents as universal and timeless.',
        ]);

        Detail::create([
            'book_id' => '15',
            'author' => 'Napoleon Hill',
            'publisher' => 'The Ralston Society',
            'year' => '1937',
            'description' => 'Think and Grow Rich is the result of Hill’s study of over five hundred self-made millionaires—a condensed, accessible explanation of his Law of Success philosophy, which includes thirteen steps to riches (financial, emotional, and spiritual).',
        ]);

    }
}
