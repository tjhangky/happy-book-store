@extends('layout')

@section('content')
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>Title</td>
                <td>: {{ $book->title }}</td>
            </tr>
            <tr>
                <td>Author</td>
                <td>: {{ $book->detail->author }}</td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td>: {{ $book->detail->publisher }}</td>
            </tr>
            <tr>
                <td>Year</td>
                <td>: {{ $book->detail->year }}</td>
            </tr>
        </tbody>
    </table>
    <p>Description: </p>
    <p style="text-align: justify">{{ $book->detail->description }}</p>
@endsection
