<!DOCTYPE html>
<html lang="en">

    <head>
    @include('layouts.partials.meta')

    <title>{{ $title }}</title>

    @include('layouts.partials.link')
    </head>

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
                <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('layouts.partials.script')
    </body>
</html>
