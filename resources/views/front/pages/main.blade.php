<!DOCTYPE html>
<html lang="en">
    <head>
        @include('front.pages.head')
    </head>

    <body>
        <!-- Nav Bar Start -->
            @include('front.pages.header')
        <!-- Nav Bar End -->


            @yield('content')


        <!-- Footer Start -->
            @include('front.pages.footer')
        <!-- Footer End -->



        <!-- JavaScript Libraries -->
        @include('front.pages.js')
    </body>
</html>
