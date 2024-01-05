<!doctype html>
<html lang="en">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>	Stuff</title>


<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/assets/css/header-colors.css') }}" />
	    <!-- Scripts -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
<title>Shop</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">


      <!-- Start::app-sidebar -->
      @include('partials.sideBar')
      <!-- End::app-sidebar -->

      <!-- Start::Header -->
      @include('partials.topNav')
      <!-- End::Header -->

		<!--start page wrapper -->
		<div class="page-wrapper">

					<!-- Start::main-content -->
							@yield('content')
					<!-- Start::main-content -->

		</div>



        <!-- Start::footer -->
        @include('partials.footer')
        <!-- End::footer -->

	</div>
	<!--end wrapper-->




	<!-- Bootstrap JS -->
	<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>


	<!--app JS-->
	<script src="{{ asset('backend/assets/js/app.js') }}"></script>

	{{-- <script>
		$(document).ready(function() {
		  $('#example').DataTable();
		  } );
	  </script> --}}


	


</body>

</html>