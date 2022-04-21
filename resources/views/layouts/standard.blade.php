<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics</title>
</head>

<body>

    <!-- HEADER -->
    <header>
        @include('partials.header')
    </header>

    <!-- MAIN -->
    <main>
        @include('partials.main')
        @include('partials.banner')
    </main>

    <!-- FOOTER -->
    <footer>
        @include('partials.footer')
        @include('partials.nav-footer')
    </footer>

</body>

</html>
