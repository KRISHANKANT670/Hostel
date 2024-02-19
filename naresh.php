<?php
    include 'config.php';

    $query="SELECT * FROM `hostel_data` WHERE 1";
    $result = mysqli_query($con,$query);
// // echo $query;
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yatriiworld - Travel and Tours Booking Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="fonts/flaticon.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area headerstye-1">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/logo-white.png" alt="image">
                                <img src="images/logo.png" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="dropdown submenu active">
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="icon-arrow-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu active">
                                        <li><a href="index.html">Homepage Default</a></li>
                                        <li><a href="index-1.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                        <li class="submenu dropdown">
                                            <a href="index-flight.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flight<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-flight.html">Homepage Flight</a></li>
                                                <li><a href="flight-list.html">Flight List</a></li>
                                                <li><a href="flight-grid.html">Flight Grid</a></li>
                                                <li><a href="flight-detail.html">Flight Detail</a></li>
                                                <li><a href="flight-booking.html">Flight Booking</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="index-car.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Car<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-car.html">Homepage Car</a></li>
                                                <li><a href="car-list.html">Car List</a></li>
                                                <li><a href="car-grid.html">Car Grid</a></li>
                                                <li><a href="car-detail.html">Car Detail</a></li>
                                                <li><a href="car-booking.html">Car Booking</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="index-train.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Train<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-train.html">Homepage Train</a></li>
                                                <li><a href="train-list.html">Train List</a></li>
                                                <li><a href="train-grid.html">Train Grid</a></li>
                                                <li><a href="train-detail.html">Train Detail</a></li>
                                                <li><a href="train-booking.html">Train Booking</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="index-hotel.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotels<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-hotel.html">Homepage Hotel</a></li>
                                                <li><a href="hotel-list.html">Hotel List</a></li>
                                                <li><a href="hotel-grid.html">Hotel Grid</a></li>
                                                <li><a href="hotel-detail.html">Hotel Detail</a></li>
                                                <li><a href="hotel-booking.html">Hotel Booking</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-search.html">Homepage Search</a></li>
                                    </ul>
                                </li>

                                <li><a href="about.html">About Us</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="booking.html">Booking</a></li>
                                        <li><a href="confirmation.html">Confirmation</a></li>
                                        <li class="submenu dropdown">
                                            <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="gallery1.html">Gallery Masonry</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="404.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Error<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="404.html">Error Page 1</a></li>
                                                <li><a href="404-1.html">Error Page 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="comingsoon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comming Soon<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="comingsoon.html">Coming Soon 1</a></li>
                                                <li><a href="comingsoon-1.html">Coming Soon 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="shop-grid1.html">Right Grid</a></li>
                                                <li><a href="shop-list1.html">Right List</a></li>
                                                <li><a href="shop-detail.html">Shop Single One</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login.html">Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                    </ul> 
                                </li>

                                <li class="submenu dropdown">
                                    <a href="destination.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destination <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="destination-list.html">Destination List</a></li>
                                        <li><a href="destination-grid.html">Destination Grid</a></li>
                                        <li><a href="destination-full.html">Destination Fullwidth</a></li>
                                        <li><a href="destination-left.html">Destination Left</a></li>
                                        <li><a href="destination-list.html">Destination Right</a></li>
                                        <li><a href="destination-masonry.html">Destination Masonry</a></li>
                                        <li class="submenu dropdown">
                                            <a href="destination-single.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destination Single<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="destination-single.html">Destination Single 1</a></li>
                                                <li><a href="destination-single1.html">Destination Single 2</a></li>
                                                <li><a href="destination-single-full.html">Destination Single Full</a></li>
                                            </ul>
                                        </li>
                                    </ul> 
                                </li>

                                <li class="submenu dropdown">
                                    <a href="blog-home.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-full.html">Blog Fullwidth</a></li>
                                        <li><a href="blog-left.html">Blog Left</a></li>
                                        <li><a href="blog-list.html">Blog Right</a></li>
                                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="blog-single-full.html">Blog Single Full</a></li>
                                    </ul> 
                                </li>  
                                <li class="submenu dropdown">
                                    <a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="dashboard-my-profile.html">User Profile</a></li>
                                        <li><a href="dashboard-list.html">User Wishlist</a></li>
                                        <li><a href="dashboard-messages.html">User Messages</a></li>
                                        <li><a href="dashboard-history.html">Booking History</a></li>
                                        <li><a href="dashboard-add-new.html">Add New</a></li>
                                        <li><a href="dashboard-list.html">Tour List</a></li>
                                        <li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
                                    </ul>
                                </li> 
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <div class="header_sidemenu">
                                <div class="mhead">
                                    <span class="menu-ham">
                                        <a href="#" class="cart-icon d-flex align-items-center ml-1"><i class="icon-basket-loaded"></i><span class="cart-label">3</span></a>
                                    </span>
                                </div>
                            </div>
                        </div><!-- /.navbar-collapse -->   

                        <div class="register-login">
                            <a href="#" class="mr-2" data-toggle="modal" data-target="#register"><i class="icon-user mr-1"></i> Register</a>
                            <a href="#" data-toggle="modal" data-target="#login"><i class="icon-login mr-1"></i> Login</a>
                        </div>   
                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hostel List</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hostel List</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  


    <!-- blog starts -->
    <section class="blog destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="trend-box">
                        <div class="list-results">
                            <div class="d-flex justify-content-between align-items-center mb-2 border-b pb-2">
                                <h3 class="mb-0">RAJASTHAN HOSTELS</h3>
                                <div class="click-menu d-flex align-items-center justify-content-between">
                                    <div class="change-list f-active mr-2"><a href="hotel-list.html"><i class="fa fa-bars"></i></a></div>
                                    <div class="change-grid"><a href="hotel-grid.html"><i class="fa fa-th"></i></a></div>
                                </div>
                            </div>
                            <div class="list-results-sort d-flex align-items-center">
                                <p class="m-0"><a href="#" class="mr-2">Recommended</a></p>
                                <div class="form-group m-0 mr-2">
                                    <div class="input-box">
                                        <select class="niceSelect">
                                            <option value="1">Price</option>
                                            <option value="2">$50-$100</option>
                                            <option value="3">$101-$150</option>
                                            <option value="4">$151-$200</option>
                                            <option value="5">$2010-$250</option>
                                        </select>
                                    </div>                            
                                </div>
                                <div class="sortby float-right d-flex align-items-center">
                                    <div class="form-group m-0 mr-2">
                                    <div class="input-box">
                                        <select class="niceSelect w-100">
                                            <option value="1">Star</option>
                                            <option value="2">One</option>
                                            <option value="3">Two</option>
                                            <option value="4">Three</option>
                                            <option value="5">Four</option>
                                            <option value="5">Five</option>
                                        </select>
                                    </div>                            
                                </div>
                                    <select class="niceSelect">
                                        <option value="1" >Sort By</option>
                                        <option value="2">Average rating</option>
                                        <option value="3">Price: low to high</option>
                                        <option value="4">Price: high to low</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <?php
                            // LOOP TILL END OF DATA
                            $left = true;
                            while($rows=mysqli_fetch_assoc($result))
                            { 
                                ?>
                                    <div class="blog-full d-flex justify-content-around mb-4">
                                        <div class="row w-100 <?php echo ($left) ? '' : 'flex-row-reverse' ?> ">
                                            <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                            <div class="blog-image">
                                                    <a href="blog-single.html" style="background-image: url(https://thumbs.dreamstime.com/z/red-rose-14112552.jpg);"></a>
                                                </div> 
                                            </div>
                                            <div class="col-lg-7 col-md-8 col-xs-12">
                                                <div class="trend-content-main">
                                                    <div class="trend-content pt-2 pb-2">
                                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                                            <div class="rating">
                                                                <small class="fas fa-star pink"></small>
                                                                <small class="fas fa-star pink"></small>
                                                                <small class="fas fa-star pink"></small>
                                                                <small class="fas fa-star pink"></small>
                                                                <small class="fas fa-star pink"></small>
                                                            </div>
                                                            <a href="#"><i class="flaticon-like"></i></a>
                                                        </div>
                                                        
                                                        <h3 class="mb-1"><a href="#"><?php echo $rows['name'] ?></a></h3>
                                                        <div class="mb-2">
                                                            <i class="icon fa fa-map-marker-alt mr-2"></i> <?php echo $rows['address'] ?>
                                                            <small class="px-1 font-size-15"> - </small>
                                                            <span class="text-primary font-size-14">View on map</span>
                                                        </div>
                                                        <div class="rating border-b pb-1 mb-1">
                                                            <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                                        </div>
                                                        <div class="trend-last-main">
                                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                                            <?php 
                                                                $meals = json_decode($rows['meals'], true);
                                                                if ( is_array($meals)){
                                                                    foreach ($meals as $meal){
                                                                        echo $meal . ", ";
                                                                    }
                                                                }
                                                            ?>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="trend-daily">
                                                            <h4 class="mb-0 pink font-weight-bold">
                                                                <?php
                                                                    $rooms_rent = json_decode($rows['room_rent'], true);
                                                                    if ( is_array($rooms_rent)){
                                                                        foreach ($rooms_rent as $rooms_rent => $cap){
                                                                            if ( $cap != '' ){
                                                                                echo $rooms_rent . " : " . $cap . "<br>";
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                    </h4>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $left = $left ? false : true;
                            }
                            ?>
                        <!-- <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100 flex-row-reverse">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list1.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content pt-2 pb-2 text-right">
                                            <h3 class="mb-2"><a href="#">Pininfarina Resort</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-2">
                                                <span>Breakfast</span>
                                                <span>Free Cancellation</span>
                                                <span>Pay at the hotel</span>
                                            </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list4.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content">
                                            <h3 class="mb-2"><a href="#">Bentley Super Hotel</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
                                                <span>Breakfast</span>
                                                <span>Free Cancellation</span>
                                                <span>Pay at the hotel</span>
                                            </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100 flex-row-reverse">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list2.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content pt-2 pb-2 text-right">
                                            <h3 class="mb-2"><a href="#">White Palace Hotel</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
                                                <span>Breakfast</span>
                                                <span>Free Cancellation</span>
                                                <span>Pay at the hotel</span>
                                            </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list6.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content">
                                            <h3 class="mb-2"><a href="#">Hyatt Regional Hotel</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
                                                <span>Breakfast</span>
                                                <span>Free Cancellation</span>
                                                <span>Pay at the hotel</span>
                                            </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100 flex-row-reverse">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list5.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content pb-2 text-right">
                                            <div class="pb-1 d-flex align-items-center justify-content-between">
                                                <div class="rating">
                                                    <small class="fas fa-star pink"></small>
                                                    <small class="fas fa-star pink"></small>
                                                    <small class="fas fa-star pink"></small>
                                                    <small class="fas fa-star pink"></small>
                                                    <small class="fas fa-star pink"></small>
                                                </div>
                                                <a href="#"><i class="flaticon-like"></i></a>
                                            </div>
                                            <h3 class="mb-2"><a href="#">Park Avenue Baker Street</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
                                                <span>Breakfast</span>
                                                <span>Free Cancellation</span>
                                                <span>Pay at the hotel</span>
                                            </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-full d-flex justify-content-around mb-4">
                            <div class="row w-100">
                                <div class="col-lg-5 col-md-4 col-xs-12 blog-height">
                                   <div class="blog-image">
                                        <a href="blog-single.html" style="background-image: url(images/rooms/list7.jpg);"></a>
                                    </div> 
                                </div>
                                <div class="col-lg-7 col-md-8 col-xs-12">
                                    <div class="trend-content-main">
                                        <div class="pb-1 d-flex align-items-center justify-content-between">
                                            <div class="rating">
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                                <small class="fas fa-star pink"></small>
                                            </div>
                                            <a href="#"><i class="flaticon-like"></i></a>
                                        </div>
                                        <div class="trend-content">
                                            <h3 class="mb-2"><a href="#">New Road Hotel</a></h3>
                                            <div class="mb-2">
                                                <i class="icon fa fa-map-marker-alt mr-2"></i> Greater London, United Kingdom
                                                <small class="px-1 font-size-15"> - </small>
                                                <span class="text-primary font-size-14">View on map</span>
                                            </div>
                                            <div class="rating border-b pb-1 mb-1">
                                                <p class="mb-0">2.5/5 Excellant | <span class="pink">48 reviews</span></p>
                                            </div>
                                            <div class="trend-last d-flex align-items-center justify-content-between border-b pb-1 mb-1">
                                                    <span>Breakfast</span>
                                                    <span>Free Cancellation</span>
                                                    <span>Pay at the hotel</span>
                                                </div>
                                            
                                            <div class="trend-daily">
                                                <h4 class="mb-0 pink font-weight-bold">From £350.00 <small>/ night</small></h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="text-center">
                            <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white">Find The Places</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Destination or Hotel Name</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Where are you going?</option>
                                                    <option value="2">Argentina</option>
                                                    <option value="3">Belgium</option>
                                                    <option value="4">Canada</option>
                                                    <option value="5">Denmark</option>
                                                </select>
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check In</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mmm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check Out</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Rooms and Guests</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a href="#" class="nir-btn w-100"><i class="fa fa-search"></i> Check Availability</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <a href="#"><img src="images/map.jpg" alt="map" class="w-100"></a>
                            </div>
                            <div class="sidebar-item">
                                <h3>Price Range($)</h3>
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span> 
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="detail-title">
                                    <h3>Meals</h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" />
                                        <div class="state">
                                            <label>Breakfast Included (213)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>All-inclusive (288)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>Breakfast & dinner included (158)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>Kitchen facilities (120)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <h3>Facilities</h3>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Parking</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" checked />
                                    <div class="state">
                                        <label>Restaurant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Pet Friendly</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Room Services</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h3>Property Type</h3>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Hotels<span class="number">749</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" checked />
                                    <div class="state">
                                        <label>Apartments<span class="number">630</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Breakfast & Bed<span class="number">58</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Resorts<span class="number">29</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <!-- footer starts -->
    <footer style="background-image:url(images/bg/bg3.jpg);" class="pt-10">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <img src="images/logo-white.png" alt="">
                            <p class="mt-3">
                                In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna
                            </p>
                            <ul>
                                <li><strong>PO Box:</strong> +47-252-254-2542</li>
                                <li><strong>Location:</strong> Collins Street, sydney, Australia</li>
                                <li><strong>Email:</strong> info@Yatriiworld.com</li>
                                <li><strong>Website:</strong> www.Yatriiworld.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Company</h4>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Services</h4>
                            <ul>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Newsletter</h4>
                            <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                            <div class="newsletter-form">
                                <form>
                                    <input type="email" placeholder="Enter your email">
                                    <input type="submit" class="nir-btn mt-2 w-100" value="Subscribe">
                                </form>
                            </div> 
                        </div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-payment">
            <div class="container">
                <div class="footer-pay d-md-flex align-items-center justify-content-between pt-2 pb-2">
                    <div class="footer-payment-nav">
                        <ul class="d-md-flex align-items-center">
                            <li class="mr-2">We Support:</li>
                            <li class="mr-2"><i class="fab fa-cc-mastercard"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-paypal"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-stripe"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-visa"></i></li>
                            <li class="mr-2"><i class="fab fa-cc-discover"></i></li>
                        </ul>
                    </div>
                    <div class="footer-payment-nav mb-0">
                        <ul>
                            <li>
                                <select>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>                                
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                    <option>English (United States)</option>
                                </select>
                            </li>
                            <li>
                                <select>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                    <option>$ USD</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2020 Yatriiworld. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>  
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
        <div class="overlay"></div>
    </footer>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink mb-1">Register</h3>  
                            <p>Access thousands of online classes in design, business, and more!</p>                  
                        </div>
                        <div class="login-form text-center">
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">Register</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> By clicking this, you are agree to to<a href="#" class=""> our terms of use</a> and <a href="#" class="">privacy policy</a> including the use of cookies
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                            <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i> Google</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Already have an account? <a href="login.html" class="pink">Login</a></p>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink">Login</h3>                    
                        </div>
                        <div class="login-form">
                            <form>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">LOGIN</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> Remember Me | <a href="#" class="">Forgot password?</a>
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Do not have an account? <a href="login.html" class="pink">Sign Up</a></p>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header side menu --> 
    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                 <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop1.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop2.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="images/shop/shop6.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/custom-date.js"></script>
</body>
</html>