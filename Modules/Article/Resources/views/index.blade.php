@extends('layouts.publicmaster')

@section('mainContent')
<main class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                <strong>All Article</strong>
            </h3>
            @foreach ($allArticles as $article)
            <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{ route('publicOneArticle', ['id' => $article->id])}}">{{ $article->title }}</a></h2>
                <p class="blog-post-meta">
                    December 14, 2013 by <a href="#">Chris</a>
                </p>

                <p>
                    {{ $article->content }}
                </p>
            </div>
            @endforeach
            <!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a
                    class="btn btn-outline-secondary disabled"
                    href="#"
                    tabindex="-1"
                    aria-disabled="true"
                    >Newer</a
                >
            </nav>
        </div>
    </div>
</main>
@endsection
