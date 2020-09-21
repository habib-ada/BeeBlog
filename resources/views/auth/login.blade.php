<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeBlog Login</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css">
    <style>
        .blog-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            font-size: 2.25rem;
        }
        .mb-4, .my-4 {
            margin-bottom: 1.5rem!important;
        }
        body {
            background-color: #333;
        }
        h1 {
            color: white;
        }
    </style>
</head>
<body>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
    <a class="blog-header-logo" href="{{ route('start') }}">BeeBlog</a>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input required autocomplete="email" autofocus type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" autocomplete="current-password" type="password" id="inputPassword" class="@error('password') is-invalid @enderror form-control" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="checkbox mb-3">
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
    </form>
</body>
</html>
