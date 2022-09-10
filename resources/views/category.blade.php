@extends('layout')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
            </tr>
        </thead>
        <tbody>
            @if ($books->isEmpty())
                <tr>
                    <td colspan="2">No Data...</td>
                </tr>
            @else
                @foreach ($books as $book)
                    <tr class="clickable" title="Book Detail" onclick="window.location='/book/{{ $book->id }}'"
                        style="cursor: pointer">
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->detail->author }}</td>
                    </tr>
                @endforeach
            @endif
    </table>
@endsection
