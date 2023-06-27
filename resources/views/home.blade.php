@extends('layouts.main')

@section('container')
    {{-- Style Home --}}
    {{-- <link rel="stylesheet" href="/css/styleHome.css"> --}}

    {{-- <div class="container">
        <div class="row">
            <div class="hero-image">
                <div class="photo-bg"><img width="450" src="img/bg-02.png" alt="" /></div>
            </div>
            <div class="hero-content">
                <p class="mb-1">Hi, Saya</p>
                <h1>Angga Eriansyah</h1>
                <p>I design beautiful websites & mobile apps that modern trends demand
                </p>

                <div class="" type="button">
                    <h5 class="mb-2">Contact me</h5>
                    <a href="https://wa.me/6282320421419"><i class="bi bi-whatsapp btn btn-light"></i></a>
                    <a href="https://www.instagram.com/angga7527_/"><i class="bi bi-instagram btn btn-light"></i></a>
                    <a href="mailto:anggaeriansyah43@gmail.com"><i class="bi bi-envelope btn btn-light"></i></a>
                </div>
            </div>

        </div>
    </div> --}}

    <div class="py-5 text-center">
        <div id="log">
            <img src="img/bg-02.png" alt="Logo Blographic" width="200" class="mb-3">
        </div>
        <h1 class="display-5 fw-bold">Welcome to Blographic</h1>
        <p class="fs-5 mb-4">Graphic Design Knowledge Documentation</p>
        <a href="/blog" class="btn btn-dark">go to blog page</a>
        {{-- <div type="button">
            <h5 class="mt-5 mb-2">Contact me</h5>
            <a href="https://wa.me/6282320421419"><i class="bi bi-whatsapp btn btn-light py-1"></i></a>
            <a href="https://www.instagram.com/angga7527_/"><i class="bi bi-instagram btn btn-light py-1"></i></a>
            <a href="mailto:anggaeriansyah43@gmail.com"><i class="bi bi-envelope btn btn-light py-1"></i></a>
        </div> --}}
    </div>


@endsection
