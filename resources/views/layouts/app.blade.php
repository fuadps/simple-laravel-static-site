<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Static Site - @yield('title')</title>

        @include('partials._stylesheets')

    </head>
    <body>
        
        @include('partials._navigations')

            <div class="container">
                @include('partials._message')
                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>

    </body>

    @include('partials._scripts')

</html>
