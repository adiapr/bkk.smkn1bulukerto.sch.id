<!doctype html>
<html class="no-js" lang="en">

    <head>
        @include('front.pages.head')
    </head>

	<body>

		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

            @include('front.pages.slider')
			<!-- top-area Start -->
			<div class="top-area">
                @include('front.pages.header')
			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

        {{-- content  --}}
            @yield('content')
        {{-- /content  --}}

        {{-- footer  --}}
        @include('front.pages.footer')

        @include('front.pages.js')

    </body>

</html>
