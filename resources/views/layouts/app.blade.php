<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google Keep</title>
        <link rel="shotcut icon" href="{{ asset('images/keep-icon.png')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    </head>
    <body>

        @include('frontend.sections.TopMenu')

        @include('frontend.sections.AsideMenu')

        <main id="mainBody">
            @yield('content')
        </main>

        <script src="https://kit.fontawesome.com/11053f558f.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>