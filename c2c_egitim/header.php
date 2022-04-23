<?php
ob_start();


session_start();
//error_reporting(0);
require_once 'nedmin/netting/baglan.php';
require_once 'nedmin/production/fonksiyon.php';
//Belirli veriyi seçme işlemi

//ayar tablosundan site ayarlarını çektim
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 0
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);?>





<!doctype html>
<html class="no-js" lang="">
    <head>
        <title> 
            <?php 
            if(empty($title)){
                echo $ayarcek ['ayar_title'];
            }
            else{
                echo $title;
            }
            ?>
        </title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
	<meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css\normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css\main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css\bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css\animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css\font-awesome.min.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor\OwlCarousel\owl.carousel.min.css">
        <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css\meanmenu.min.css">

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css\jquery.datetimepicker.css">

         <!-- ReImageGrid CSS -->
        <link rel="stylesheet" href="css\reImageGrid.css">

        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css\hover-min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Modernizr Js -->
        <script src="js\modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Main Body Area Start Here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <header>                
                <div id="header2" class="header2-area right-nav-mobile">
                    <div class="header-top-bar">
                        <div class="container">
                            <div class="row">                         
                                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                    <div class="logo-area">
                                        <a href="index.php"><img class="img-responsive" src="<?php echo $ayarcek['ayar_logo']  ?>" alt="logo"></a>
                                    </div>
                                </div> 
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <ul class="profile-notification">                                            
                                        <li>
                                            <div class="notify-contact"><span>Need help?</span> Talk to an expert: +61 3 8376 6284</div>
                                        </li>
                                        <li>
                                            <div class="notify-notification">
                                                <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i><span>8</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="notify-notification-img">
                                                            <img class="img-responsive" src="img\profile\1.png" alt="profile">
                                                        </div>
                                                        <div class="notify-notification-info">
                                                            <div class="notify-notification-subject">Need WP Help!</div>
                                                            <div class="notify-notification-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-notification-sign">
                                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="notify-notification-img">
                                                            <img class="img-responsive" src="img\profile\2.png" alt="profile">
                                                        </div>
                                                        <div class="notify-notification-info">
                                                            <div class="notify-notification-subject">Need HTML Help!</div>
                                                            <div class="notify-notification-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-notification-sign">
                                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="notify-notification-img">
                                                            <img class="img-responsive" src="img\profile\3.png" alt="profile">
                                                        </div>
                                                        <div class="notify-notification-info">
                                                            <div class="notify-notification-subject">Psd Template Help!</div>
                                                            <div class="notify-notification-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-notification-sign">
                                                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="notify-message">
                                                <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="notify-message-img">
                                                            <img class="img-responsive" src="img\profile\1.png" alt="profile">
                                                        </div>
                                                        <div class="notify-message-info">
                                                            <div class="notify-message-sender">Kazi Fahim</div>
                                                            <div class="notify-message-subject">Need WP Help!</div>
                                                            <div class="notify-message-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-message-sign">
                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="notify-message-img">
                                                            <img class="img-responsive" src="img\profile\2.png" alt="profile">
                                                        </div>
                                                        <div class="notify-message-info">
                                                            <div class="notify-message-sender">Richi Lenal</div>
                                                            <div class="notify-message-subject">Need HTML Help!</div>
                                                            <div class="notify-message-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-message-sign">
                                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="notify-message-img">
                                                            <img class="img-responsive" src="img\profile\3.png" alt="profile">
                                                        </div>
                                                        <div class="notify-message-info">
                                                            <div class="notify-message-sender">PsdBosS</div>
                                                            <div class="notify-message-subject">Psd Template Help!</div>
                                                            <div class="notify-message-date">01 Dec, 2016</div>
                                                        </div>
                                                        <div class="notify-message-sign">
                                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-area">
                                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="img-responsive" alt="product" src="img\product\more2.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h1><a href="#">Product Title Here</a></h1>
                                                                            <h2><span>Code:</span> STPT600</h2>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$49</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="img-responsive" alt="product" src="img\product\more3.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h1><a href="#">Product Title Here</a></h1>
                                                                            <h2><span>Code:</span> STPT460</h2>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$75</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>                                                   
                                                    <li>
                                                        <table class="table table-bordered sub-total-area">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td>$124</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Discount</td>
                                                                    <td>$30</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Vat(20%)</td>
                                                                    <td>$18.8</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sub Total</td>
                                                                    <td>$112.8</td>
                                                                </tr>                                                                 
                                                            </tbody>
                                                        </table>
                                                    </li>
                                                    <li>
                                                        <ul class="cart-checkout-btn">
                                                            <li><a href="cart.htm" class="btn-find"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Go to Cart</a></li>
                                                            <li><a href="check-out.htm" class="btn-find"><i class="fa fa-share" aria-hidden="true"></i>Go to Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php
                                        if (isset($_SESSION['userkullanici_mail'])) {?>
                                        
                                        <li>
                                            <div class="user-account-info">
                                                <div class="user-account-info-controler">
                                                    <div class="user-account-img">
                                                        <img class="img-responsive" src="img\profile\4.png" alt="profile">
                                                    </div>
                                                    <div class="user-account-title">
                                                        <div class="user-account-name">Mike Hussy</div>
                                                        <div class="user-account-balance">$171.00</div>
                                                    </div>
                                                    <div class="user-account-dropdown">
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><a href="#">Profile Page</a></li>
                                                    <li><a href="#">Portfolio</a></li>
                                                    <li><a href="#">Account Setting</a></li>
                                                    <li><a href="#">Downloads</a></li>
                                                    <li><a href="#">Wishlist</a></li>
                                                    <li><a href="#">Upload Item</a></li>
                                                    <li><a href="#">Statement</a></li>
                                                    <li><a href="#">Withdraws</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a class="apply-now-btn" href="logout.php" id="logout-button">Logout</a></li>
                                        <?php }?>
                                        
                                    </ul>
                                </div>                          
                            </div>                          
                        </div>
                    </div>
                    <div class="main-menu-area bg-primaryText" id="sticker">
                        <div class="container">
                            <nav id="desktop-nav">
                                <ul>
                                    <li class="active"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.htm">Home 1</a></li>
                                            <li><a href="index2.htm">Home 2</a></li>
                                        </ul>   
                                    </li>
                                    <li><a href="about.htm">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="mega-menu-area"> 
                                            <li>
                                                <a href="index.htm">Home 1</a>
                                                <a href="index2.htm">Home 2</a>
                                                <a href="about.htm">About</a>
                                                <a href="product-page-grid.htm">Product Grid</a>
                                            </li> 
                                            <li>
                                                <a href="product-page-list.htm">Product List</a>
                                                <a href="product-category-grid.htm">Category Grid</a>
                                                <a href="product-category-list.htm">Category List</a>
                                                <a href="single-product.htm">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="profile.htm">Profile</a>
                                                <a href="favourites-grid.htm">Favourites Grid</a>
                                                <a href="favourites-list.htm">Favourites List</a>
                                                <a href="settings.htm">Settings</a>
                                            </li>
                                            <li>
                                                <a href="upload-products.htm">Upload Products</a>
                                                <a href="sales-statement.htm">Sales Statement</a>
                                                <a href="withdrawals.htm">Withdrawals</a>
                                                <a href="404.htm">404</a>
                                            </li>
                                        </ul>                                            
                                    </li>
                                    <li><a href="product-page-grid.htm">WordPress</a></li>
                                    <li><a href="product-category-grid.htm">Joomla</a></li>
                                    <li><a href="product-category-list.htm">Plugins</a></li>
                                    <li><a href="product-page-list.htm">Components</a></li>
                                    <li><a href="product-category-grid.htm">PSD</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.htm">Blog</a></li>
                                            <li><a href="single-blog.htm">Blog Details</a></li> 
                                            <li class="has-child-menu"><a href="#">Second Level</a>
                                            <ul class="thired-level">
                                                <li><a href="index.htm">Thired Level 1</a></li>
                                                <li><a href="index.htm">Thired Level 2</a></li>
                                            </ul>
                                        </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.htm">Contact</a></li>
                                    <li><a href="help.htm">Help</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active"><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.htm">Home 1</a></li>
                                                    <li><a href="index2.htm">Home 2</a></li>
                                                </ul>   
                                            </li>
                                            <li><a href="about.htm">About</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="mega-menu-area"> 
                                                    <li>
                                                        <a href="index.htm">Home 1</a>
                                                        <a href="index2.htm">Home 2</a>
                                                        <a href="about.htm">About</a>
                                                        <a href="product-page-grid.htm">Product Grid</a>
                                                    </li> 
                                                    <li>
                                                        <a href="product-page-list.htm">Product List</a>
                                                        <a href="product-category-grid.htm">Category Grid</a>
                                                        <a href="product-category-list.htm">Category List</a>
                                                        <a href="single-product.htm">Product Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="profile.htm">Profile</a>
                                                        <a href="favourites-grid.htm">Favourites Grid</a>
                                                        <a href="favourites-list.htm">Favourites List</a>
                                                        <a href="settings.htm">Settings</a>
                                                    </li>
                                                    <li>
                                                        <a href="upload-products.htm">Upload Products</a>
                                                        <a href="sales-statement.htm">Sales Statement</a>
                                                        <a href="withdrawals.htm">Withdrawals</a>
                                                        <a href="404.htm">404</a>
                                                    </li>
                                                </ul>                                            
                                            </li>
                                            <li><a href="product-page-grid.htm">WordPress</a></li>
                                            <li><a href="product-category-grid.htm">Joomla</a></li>
                                            <li><a href="product-category-list.htm">Plugins</a></li>
                                            <li><a href="product-page-list.htm">Components</a></li>
                                            <li><a href="product-category-grid.htm">PSD</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.htm">Blog</a></li>
                                                    <li><a href="single-blog.htm">Blog Details</a></li> 
                                                    <li class="has-child-menu"><a href="#">Second Level</a>
                                                    <ul class="thired-level">
                                                        <li><a href="index.htm">Thired Level 1</a></li>
                                                        <li><a href="index.htm">Thired Level 2</a></li>
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.htm">Contact</a></li>
                                            <li><a href="help.htm">Help</a></li>
                                        </ul>
                                    </nav>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Mobile Menu Area End -->
            </header>
