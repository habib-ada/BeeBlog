@extends('layouts.publicmaster')

@section('mainContent')
<main class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $article->title }}</h2>
                <p class="blog-post-meta">
                    December 14, 2013 by <a href="#">Chris</a>
                </p>

                <p>
                    {{ $article->content }}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection