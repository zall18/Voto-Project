<!DOCTYPE html>
<html lang="en">

<head>
    <title>Voto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('customerAssets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('customerAssets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('customerAssets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('customerAssets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('customerAssets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('customerAssets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('customerAssets/css/style.css') }}">
</head>

<body class="goto-here">
    @include('Template.nav')
    <!-- END nav -->
    @include('sweetalert::alert')
    @yield('contentCustomer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('customerAssets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/popper.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/aos.js') }}"></script>
    <script src="{{ asset('customerAssets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('customerAssets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('customerAssets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('customerAssets/js/google-map.js') }}"></script>
    <script src="{{ asset('customerAssets/js/main.js') }}"></script>
    <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
</body>

</html>
