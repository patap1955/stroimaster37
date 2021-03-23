<!DOCTYPE html>
<html lang="en">
    @include('layouts.meta')
<body>
    <div class="boxed-container">
        <header class="header" role="banner">
            @include('layouts.nav-contacts')
            <div class="sticky-offset  js-sticky-offset"></div>
            @include('layouts.nav-menu-header')

        </header>
        @section('carousel')
            @include('layouts.carousel')
        @endsection

    </div>
        <div class="master-container">
            <div class="container">
                <div class="row">
                    @include('layouts.message_success')
                    @yield('content')
                </div>
            </div>
        </div>
    @include('layouts.footer')
</body>
</html>

