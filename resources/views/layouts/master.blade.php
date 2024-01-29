<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png"/>
	<!--plugins-->
	<link href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet"/>
	<script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ asset('backend/assets/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ asset('backend/assets/css/header-colors.css') }}"/>
	<title>Stuff</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">


		<!--sidebar wrapper -->
		@include('partials.sidebar')
		<!--end sidebar wrapper -->


		<!--start header -->
		@include('partials.topnav')
		<!--end header -->



		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">



					<!-- Start::main-content -->
					@yield('content')
					<!-- Start::main-content -->





			</div>

		</div>
		<!--end page wrapper -->



		<!--start overlay and footer-->
		@include('partials.footer')
		<!--start overlay and footer-->

	</div>
	<!--end wrapper-->


	<!-- search modal -->
	{{-- @include('partials.search') --}}
    <!-- end search modal -->




	<!--start switcher-->
	@include('partials.switcher')
	<!--end switcher-->


  
	<!-- Bootstrap JS -->
	<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/chartjs/js/chart.js') }}"></script>
	<script src="{{ asset('backend/assets/js/index.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('backend/assets/js/app.js') }}"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
		<script>
			$(document).ready(function() {
				var table = $('#example2').DataTable( {
					lengthChange: false,
					buttons: [ 'copy', 'excel', 'pdf', 'print']
				} );
			 
				table.buttons().container()
					.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
			} );
		</script>

</body>

</html>