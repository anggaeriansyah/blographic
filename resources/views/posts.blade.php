@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())

        <div class="p-2">
            <div class="card mb-3">
                @if ($posts[0]->image)
                    <div style="max-height:400px; overflow:hidden; width:100%;">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="img-fluid mx-auto d-block">
                    </div>
                @else
                    <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                        alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            </a>
                            By: <a href="/blog?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                                href="/blog?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    {{-- <p class="card-text"><small class="text-muted">10 menit yang lalu</small></p> --}}
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">Read More</a>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)

                    <div class="col-md-4 mb-3 p-2">
                        <div class="card h-100">
                            <div id="an" class="position-absolute px-2 py-1 rounded"
                                style="background-color:rgba(0,0, 0, 0.5)"> <a
                                    href="/blog?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>

                            @if ($post->image)
                                <img style="width:100%" src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->category->name }}" class="card-img-top">
                            @else
                                <img class="card-img-top"
                                    src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                        class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                <p>
                                    <small class="text-muted">
                                        </a>
                                        By : <a href="/blog?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p id="exc" class="card-text mb-auto">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-dark py-1 mt-3 w-100">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- @foreach ($posts->skip(1) as $post)
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</p></a>

    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a>
</article>
@endforeach --}}

    @else
        <h5 class="text-center bold fs-4">No post found.</h5>
    @endif

    <div class="d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>

@endsection
