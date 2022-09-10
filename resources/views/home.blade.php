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
                        <a href="/book/{{ $book->id }}">
                            <td>{{ $book->title }}
                            </td>
                            <td>{{ $book->detail->author }}</td>
                        </a>
                    </tr>
                @endforeach
            @endif
    </table>

    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
@endsection
