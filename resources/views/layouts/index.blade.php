<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Responsive Admin Dashboard">
		<meta name="keywords" content="admin,dashboard">
		<meta name="author" content="stacks">
		<!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!-- Title -->
		<title></title>

		<!-- Styles -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
		<link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/pace/pace.css')}}" rel="stylesheet">
		<link href="{{asset('plugins/highlight/styles/github-gist.css')}}" rel="stylesheet">


		<!-- Theme Styles -->
		<link href="{{asset('css/main.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/custom.css')}}" rel="stylesheet">

		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/neptune.png')}}" />
		<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/neptune.png')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>

	<body>
		<div class="app align-content-stretch d-flex flex-wrap">
			@include('layouts.components.sidebar')
			<div class="app-container">
				<div class="search">
					<form>
						<input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
					</form>
					<a href="#" class="toggle-search"><i class="material-icons">close</i></a>
				</div>
				<div class="app-header">
					@include('layouts.components.header')
				</div>
				<div class="app-content">
					<div class="content-wrapper">
						<div class="container-fluid">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Javascripts -->
		<script src="{{asset('plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('plugins/pace/pace.min.js')}}"></script>
		<script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
		<script src="{{asset('js/main.min.js')}}"></script>
		<script src="{{asset('js/custom.js')}}"></script>
	</body>

</html>