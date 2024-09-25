<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
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
<body>
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('customerAssets/images/bg_6.jpg') }}');">
        <h1 class="text-center font-weight-bold">Let's Complete Your Registration</h1>
    </div>
    
    <section class="ftco-section contact-section bg-light">
        <div class="container">
            
            <form action="#" class="billing-form container">
                <div class="row align-items-end">
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Your Account Section!</h1>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Name</label>
                            <input type="text" class="form-control" placeholder="" name="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Confirm Password</label>
                            <input type="password" class="form-control" name="repassword" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Your Address Section!</h1>

                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="country">State / Country</label>
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <input type="text" class="form-control" placeholder="" value="" name="country">
    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="country">State</label>
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <input type="text" class="form-control" placeholder="" value="" name="state">
    
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="streetaddress">Street Address</label>
                            <input type="text" class="form-control" placeholder="House number and street name" name="street_address"
                                >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" name="detail_address"
                                value="">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="towncity">Town / City</label>
                            <input type="text" class="form-control" placeholder="" value="" name="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcodezip">Postcode / ZIP *</label>
                            <input type="text" class="form-control" placeholder="" value="" name="postal_code">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" placeholder="" value="" name="phone">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Your Account Section!</h1>

                    </div>
    
                </div>
            </form><!-- END -->
</body>
</html>