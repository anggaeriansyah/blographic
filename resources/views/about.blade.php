@extends('layouts.main')

@section('container')
    {{-- <div class="text-center mb-3">
        <h1>About</h1>
    </div> --}}
    {{-- <div class="detel">
        <h3>{{ $name }}</h3>
        <p>This is my official Portfolio website to showcase my
            all works related to <br> web development and ui design.</p>
        <div class="ic">
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/angga7527_/"><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-envelope"></i></a>
        </div>
    </div>
    <div class="images">
        <img src="img/{{ $image }}" alt="{{ $name }}" width="400" class="img-thumbnail rounded-circle">
    </div> --}}
    {{-- <div class="bg-dark text-secondary px-4 py-4 text-center rounded"> --}}
    <div id="log" class="py-5 text-center">
        <img src="img/bg-02.png" alt="{{ $name }}" width="200" class="mb-3">
        <h1 class="display-5 fw-bold">Blographic</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Blographic is a place to store knowledge about graphic design on a website, used to
                create a blog or tutorials about graphic design such as Adobe Photoshop, Adobe Illustrator, Corel Draw,
                Adobe Premiere
                Pro and others. and also can be read by everyone to learn it.</p>
            {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-light btn-lg px-4">About Me</button>
                </div> --}}
            {{-- <div class="" type="button">
                <p class="mb-2">Contact me</p>
                <a href="https://wa.me/6282320421419"><i class="bi bi-whatsapp btn btn-light py-1"></i></a>
                <a href="https://www.instagram.com/angga7527_/"><i class="bi bi-instagram btn btn-light py-1"></i></a>
                <a href="mailto:anggaeriansyah43@gmail.com"><i class="bi bi-envelope btn btn-light py-1"></i></a>
            </div> --}}
        </div>
    </div>
    {{-- </div> --}}
@endsection
