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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Country Campaigns</h4>
                        <p class="mb-0">Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                    </div>
                    <div class="table-responsive table-desi">
                        <table id="hostel_table" class="basic-table table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        id
                                    </th>
                                    <th>
                                        building
                                    </th>
                                    <th>
                                        Hostel name
                                    </th>
                                    <th>
                                        type
                                    </th>
                                    <th>
                                        Owner name
                                    </th>
                                    <th>
                                        Owner Mobile
                                    </th>
                                    <th>
                                        Owner email
                                    </th>
                                    <th>
                                        address
                                    </th>
                                    <th>
                                        room
                                    </th>
                                    <th>
                                        room rent
                                    </th>
                                    <th>
                                        washroom
                                    </th>
                                    <th>
                                        heater
                                    </th>
                                    <th>
                                        mess
                                    </th>
                                    <th>
                                        meals
                                    </th>
                                    <th>
                                        amenities
                                    </th>
                                    <th>
                                        comment
                                    </th>
                                    <th>
                                        collect by
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // LOOP TILL END OF DATA
                                    while($rows=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                
                                    <tr>
                                        <!-- FETCHING DATA FROM EACH
                                            ROW OF EVERY COLUMN -->
                                        <td>
                                            
                                                <?php echo $rows['id'];?>
                                            
                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['building'];?>
                                            
                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['name'];?>
                                            
                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['type'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['owner_name'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['owner_mobile'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['owner_email'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['address'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php 
                                                $rooms = json_decode($rows['room'], true);
                                                if ( is_array($rooms)){
                                                    foreach ($rooms as $room => $cap){
                                                        if ( $cap != '' ){
                                                            echo $room . " : " . $cap . "<br>";
                                                        }
                                                    }
                                                }
                                                
                                                ?>
                                            

                                        </td>
                                        <td>
                                            
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
                                               
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['washroom'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['heater'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['mess'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php 
                                                  $meals = json_decode($rows['meals'], true);
                                                  if ( is_array($meals)){
                                                      foreach ($meals as $meal){
                                                        echo $meal . ", ";
                                                      }
                                                  }
                                                ?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php 
                                                  $amenities = json_decode($rows['amenities'], true);
                                                  if ( is_array($amenities)){
                                                      foreach ($amenities as $amenitie){
                                                        echo $amenitie . ", ";
                                                      }
                                                  }
                                                
                                                ?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['comment'];?>
                                            

                                        </td>
                                        <td>
                                            
                                                <?php echo $rows['collected_by'];?>
                                            

                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
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
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#hostel_table').DataTable();
        } );
    </script>
</body>
</html>