<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        $books = Book::paginate(5);
        $title = 'Book List';
        return view('home', compact('books', 'categories', 'title'));
    }

    public function showBook(Book $book)
    {
        $title = 'Book Details';
        $book = Book::where('id', $book->id)->first();
        $categories = Category::all();
        return view('book', compact('book', 'categories', 'title'));
    }

    public function showCategory(Category $category)
    {   
        $title = $category->category;
        $categories = Category::all();
        $books = Book::where('category_id', $category->id)->get();
        return view('category', compact('books', 'categories', 'title'));
    }

    public function contact() {
        $title = 'Contact';
        $categories = Category::all();
        return view('contact', compact('categories', 'title'));
    }
}
