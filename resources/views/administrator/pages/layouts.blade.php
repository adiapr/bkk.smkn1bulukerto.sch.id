<!DOCTYPE html>
<html lang="en">
<head>
	@include('administrator.pages.head')
</head>
<body>
	<div class="wrapper">
		
		{{-- header  --}}
		@include('administrator.pages.header')
		{{-- end header  --}}
		
		<!-- Sidebar -->
		@include('administrator.pages.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">@yield('title')</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">@yield('sidebar')</a>
							</li>
						</ul>
					</div>
					@yield('content')
				</div>
			</div>
			
			{{-- footer  --}}
			@include('administrator.pages.footer')
			{{-- end footer  --}}
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		@include('administrator.pages.template')
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	@include('administrator.pages.js2')
</body>
</html>