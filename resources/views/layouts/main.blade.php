<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- My style -->
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/bgc-02.ico">
    <title>Blographic | {{ $title }}</title>

</head>

<body>

    @include('partials.nav')

    <div class="container mt-4">
        @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>
<footer id="fot" class="bg-dark text-center">
    {{-- <div class="container p-3">
    </div> --}}
    <div class="container d-flex text-start p-2">
        © 2021 Copyright by Angga Eriansyah
        <section class="ms-auto">
            {{-- <a href="#"><i class="btn btn-light py-1 bi bi-facebook"></i></a> --}}
            <a href="https://wa.me/6282320421419"><i class="bi bi-whatsapp btn btn-light py-1 px-2"></i></a>
            <a href="https://www.instagram.com/angga7527_/"><i class="bi bi-instagram btn btn-light py-1 px-2"></i></a>
            <a href="mailto:anggaeriansyah43@gmail.com"><i class="bi bi-envelope btn btn-light py-1 px-2"></i></a>
        </section>
</footer>

</html>
