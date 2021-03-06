<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
        />
        <meta name="generator" content="Jekyll v3.8.6" />
        <title>BeeBlog Home</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/4.4/examples/blog/"
        />

        <!-- Bootstrap core CSS -->
        <link
            href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />

        <!-- Favicons -->
        <link
            rel="apple-touch-icon"
            href="/docs/4.4/assets/img/favicons/apple-touch-icon.png"
            sizes="180x180"
        />
        <link
            rel="icon"
            href="/docs/4.4/assets/img/favicons/favicon-32x32.png"
            sizes="32x32"
            type="image/png"
        />
        <link
            rel="icon"
            href="/docs/4.4/assets/img/favicons/favicon-16x16.png"
            sizes="16x16"
            type="image/png"
        />
        <link
            rel="manifest"
            href="/docs/4.4/assets/img/favicons/manifest.json"
        />
        <link
            rel="mask-icon"
            href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg"
            color="#563d7c"
        />
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico" />
        <meta
            name="msapplication-config"
            content="/docs/4.4/assets/img/favicons/browserconfig.xml"
        />
        <meta name="theme-color" content="#563d7c" />

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link
            href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900"
            rel="stylesheet"
        />
        <!-- Custom styles for this template -->
        <link
            href="https://getbootstrap.com/docs/4.4/examples/blog/blog.css"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="container">
            <header class="blog-header py-3">
                <div
                    class="row flex-nowrap justify-content-between align-items-center"
                >
                    <div class="col-8">
                    <a class="blog-header-logo text-dark" href="{{ route('start') }}">BeeBlog</a>
                    </div>
                    <div
                        class="col-4 d-flex justify-content-end align-items-center"
                    >
                        <a class="text-muted" href="#" aria-label="Search">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                class="mx-3"
                                role="img"
                                viewBox="0 0 24 24"
                                focusable="false"
                            >
                                <title>Search</title>
                                <circle cx="10.5" cy="10.5" r="7.5" />
                                <path d="M21 21l-5.2-5.2" />
                            </svg>
                        </a>
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}"
                            >Log in</a
                        >
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex">
                <a class="p-2 text-muted" href="{{ route('publicAllArticle') }}"><strong>All Article</strong></a>
                    <a class="p-2 text-muted" href="#">Pemrograman</a>
                    <a class="p-2 text-muted" href="#">Kesehatan</a>
                </nav>
            </div>
            @yield('lastestArticle')
        </div>

        @yield('mainContent')
        
        <!-- /.container -->

        <footer class="blog-footer">
            <p>
                Blog template built for
                <a href="https://getbootstrap.com/">Bootstrap</a> by
                <a href="https://twitter.com/mdo">@mdo</a>.
            </p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
    </body>
</html>
