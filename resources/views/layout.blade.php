<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body style="background-color: #FBFAF5">
    {{-- title --}}
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="/" style="color:#FBFAF5">
                <h1>HAPPY BOOK STORE</h1>
            </a>
        </div>
    </nav>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center mb-4" style="background-color: #77B747">
        <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="/">Home</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="\category\{{ $category->id }}">{{ $category->category }}</a></li>
                    @endforeach

                </ul>
            </li>
            <a class="nav-link" href="/contact">Contact</a>
        </div>
    </nav>

    {{-- content --}}
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <div class="bg-dark text-light pt-2 pb-1 ps-2 mb-2">
                    <h5>{{ $title }}</h5>
                </div>

                @yield('content')
            </div>

            <div class="col-md-2">
                <div class="bg-dark text-light pt-2 pb-1 ps-2">
                    <h5>Category</h5>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($categories as $category)
                        <a href="\category\{{ $category->id }}"
                            class="list-group-item list-group-item-action d-flex justify-content-between"
                            style="background-color: #FBFAF5">{{ $category->category }}
                            <span class="badge rounded-pill bg-dark">{{ $category->books->count() }} </span>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="d-flex justify-content-center text-dark fixed-bottom py-1" style="background-color: #77B747">
        &copy; Happy Book Store 2021
    </div>

</body>

</html>
