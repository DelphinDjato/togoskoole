<!DOCTYPE html>
<html lang="en">

    <head>
    @include('layouts.partials.meta')

    <title>{{ $title }}</title>

    @include('layouts.partials.link')
    </head>

    <body>
        <div class="container-scroller">

            @include('layouts.partials.navbar')

            <div class="container-fluid page-body-wrapper">
                @include('layouts.partials.sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                        <div id="app">
                            @yield('content')
                        </div>
                    </div>

                    @include('layouts.partials.footer')
                </div>
            </div>
        </div>

        @include('layouts.partials.script')
    </body>
</html>
