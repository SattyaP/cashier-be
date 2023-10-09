<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docs | Product</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="{{ route('index') }}" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                        viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Docs API</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none fw-bold" href="{{ route('introduction') }}">Home</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about') }}">About</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Repository</a>
                </nav>
            </div>
        </header>

        <main>
            <h1 class="fw-bolder mb-3">Cashier API for a Project's Documentation</h1>
            <p class="fs-5 fst-italic">All Of the endpoint on below need an API KEY its get from user dashboard <span><a
                        href="{{ route('login') }}">here</a></span></p>
            <ul>
                <li class="fs-5 mb-3">ENDPOINT Product <span class="fw-bold">READ</span>  ( GET ) https://api.alsavdev.com/product <br>
                    <span class="text-red">Need bearer token <span><a href="{{ route('login') }}">here</a></span></span>
                    <br>
                    Feature : <br>
                    - get list product with /product <br>
                    - get latest product with /product?latest=true
                </li>
                <li class="fs-5 mb-3">
                    ENDPOINT Product <span class="fw-bold">CREATE</span> ( POST ) https://api.alsavdev.com/product <br>
                    <span class="text-red">Need bearer token <span><a href="{{ route('login') }}">here</a></span></span>
                    <br>
                    Structure Data : <br>
                    - category_id ( required ) <br>
                    - name_product ( required ) <br>
                    - image_product ( nullable ) <br>
                    - description ( nullable ) <br>
                    - amount ( required ) <br>
                    - qty ( required ) <br>
                </li>
                <li class="fs-5 mb-3">
                    ENDPOINT Product <span class="fw-bold">UPDATE</span> ( POST ) https://api.alsavdev.com/product/{id} <br>
                    <span class="text-red">Need bearer token <span><a href="{{ route('login') }}">here</a></span></span>
                    <br>
                    Structure Data : <br>
                    - category_id <br>
                    - name_product <br>
                    - image_product <br>
                    - description <br>
                    - amount <br>
                    - qty <br>
                </li>
                <li class="fs-5 mb-3">
                    ENDPOINT Product <span class="fw-bold">DESTROY</span> ( DELETE ) https://api.alsavdev.com/product/{id} <br>
                    <span class="text-red">Need bearer token <span><a href="{{ route('login') }}">here</a></span></span>
                </li>
            </ul>
        </main>
    </div>
</body>

</html>
