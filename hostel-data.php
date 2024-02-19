<?php
    include 'config.php';

    if(isset($_POST['add-hostel'])){

        $building = 'HOSTEL';
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $type = mysqli_real_escape_string($con, $_POST['type']);
        $owner_name = mysqli_real_escape_string($con, $_POST['owner_name']);
        $owner_mobile = mysqli_real_escape_string($con, $_POST['owner_mobile']);
        $owner_email = mysqli_real_escape_string($con, $_POST['owner_email']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $collected_by = mysqli_real_escape_string($con, $_POST['collected_by']);

        $room = array(
            'single_nac_room' => mysqli_real_escape_string($con, $_POST['single_nac_room']),
            'single_ac_room' => mysqli_real_escape_string($con, $_POST['single_ac_room']),
            'double_nac_room' => mysqli_real_escape_string($con, $_POST['double_nac_room']),
            'double_ac_room' => mysqli_real_escape_string($con, $_POST['double_ac_room'])
        );
 
        $room = json_encode($room);

        $room_rent = array(
            'single_nac_rent' => mysqli_real_escape_string($con, $_POST['single_nac_rent']),
            'single_ac_rent' => mysqli_real_escape_string($con, $_POST['single_ac_rent']),
            'double_nac_rent' => mysqli_real_escape_string($con, $_POST['double_nac_rent']),
            'double_ac_rent' => mysqli_real_escape_string($con, $_POST['double_ac_rent'])
        );

        $room_rent = json_encode($room_rent);

        $washroom = mysqli_real_escape_string($con, $_POST['washroom']);
        $heater = mysqli_real_escape_string($con, $_POST['heater']);
        $mess = mysqli_real_escape_string($con, $_POST['mess']);
        if ($mess === 'on' ){
            $meals = array();
            foreach($_POST['meals'] as $meal) {
                $meals[] = mysqli_real_escape_string($con, $meal);
            }
            $meals = json_encode($meals);
        } else{
            $meals = NULL;
        }
        
        $amenities = array();
        foreach($_POST['amenities'] as $amenitie) {
            $amenities[] = mysqli_real_escape_string($con, $amenitie);
        }
        $amenities = json_encode($amenities);

        $comment = mysqli_real_escape_string($con, $_POST['comment']);


        $query = "INSERT INTO `hostel_data` (`building`, `name`,`type`,`owner_name`,`owner_mobile`,`owner_email`,`address`,`room`,`room_rent`,`washroom`,`heater`,`mess`,`meals`,`amenities`,`comment`, `collected_by`) VALUES ('$building', '$name','$type','$owner_name','$owner_mobile','$owner_email','$address', '$room','$room_rent','$washroom','$heater','$mess','$meals','$amenities','$comment', '$collected_by')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Hostel Added Successfully')</script>";
        }
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NDA Hostels</title>
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

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0 pt-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hostel</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hostel</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  

    <!-- blog starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-2">
                                <h3 class="border-b pb-2 mb-2">Hostel Information</h3>
                                <form class="mb-2" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Hostel Name</label>
                                                <input type="text" placeholder="Hostel Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Type of Hostel</label>
                                                <div class="input-box">
                                                    <select class="niceSelect" name="type">
                                                        <option value="boys">Boys</option>
                                                        <option value="girls">Girls</option>
                                                        <option value="unisex">Unisex</option>
                                                    </select>
                                                </div>                            
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Owner's Name</label>
                                                <input type="text" placeholder="Owner's Name" name="owner_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Owner's Mobile</label>
                                                <input type="text" placeholder="Owner's Mobile" name="owner_mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Owner's Email</label>
                                                <input type="text" placeholder="Owner's Email" name="owner_email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="required">Address</label>
                                            <div class="form-group">
                                                <textarea name="address" cols="30" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="">
                                            <legend>Number of Rooms:</legend>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Single Non-AC</label>
                                                    <input type="text" name="single_nac_room">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Single AC</label>
                                                    <input type="text" name="single_ac_room">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Double Non-AC</label>
                                                    <input type="text" name="double_nac_room">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Double AC</label>
                                                    <input type="text" name="double_ac_room">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Room Rent:</legend>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Single Non-AC Room Rent</label>
                                                    <input type="text" name="single_nac_rent">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Single AC Room Rent</label>
                                                    <input type="text" name="single_ac_rent">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Double Non-AC Room Rent</label>
                                                    <input type="text" name="double_nac_rent">
                                                </div>
                                            </div>
                                            <div class="col-md-2 d-inline-block">
                                                <div class="form-group">
                                                    <label>Double AC Room Rent</label>
                                                    <input type="text" name="double_ac_rent">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Washrooms</label>
                                                <div class="input-box">
                                                    <select class="niceSelect" name="washroom">
                                                        <option value="attached">Attached</option>
                                                        <option value="common">Common</option>
                                                    </select>
                                                </div>                            
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Water Heating System</label>
                                                <div class="input-box">
                                                    <select class="niceSelect" name="heater">
                                                        <option value="Gyser">Gyser</option>
                                                        <option value="Solar">Solar</option>
                                                        <option value="NA">NA</option>
                                                    </select>
                                                </div>                            
                                            </div>
                                        </div>
                                        <fieldset class="col-md-6">
                                            <legend>Mess Facility</legend>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="mess"> Mess Facility in Hostel
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="meals[]" value="Breakfast"> Breakfast
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="meals[]" value="Lunch"> Lunch
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="meals[]" value="Evening Snacks"> Evening Snacks
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="meals[]" value="Dinner"> Dinner
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="meals[]" value="Milk"> Milk
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-6">
                                            <legend>Other Amenities</legend>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="lease"> Hostel on Lease
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="amenities[]" value="RO Purifier"> Water Filter System/RO
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="amenities[]" value="Water Cooler"> Water Cooler
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="amenities[]" value="Wi-Fi"> Wi-Fi
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="amenities[]" value="Van Service"> Van Service
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox" name="amenities[]" value="Security Camera"> Security Camera
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="col-md-12">
                                            <label>Comments</label>
                                                <div class="form-group">
                                                    <textarea name="comment" cols="30" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Data Collected By</label>
                                                <input type="text" placeholder="Your Name" name="collected_by" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-btn">
                                                <input type="submit" name="add-hostel" value="Submit" class="nir-btn">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <!-- footer starts -->
    <footer style="background-image:url(images/bg/bg3.jpg);">
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2022 NDA. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>  
                            <!-- <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> -->
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
    <script src="js/custom-swiper3.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/custom-accordian.js"></script>
    <script src="js/custom-date.js"></script>
</body>
</html>