<!--
Author: Dip Ghosh
Author Github: https://github.com/Dip-Ghosh
Email:dipghosh638@gmail.com
-->
<!DOCTYPE html>
<html>
<head>
<title>PetcoShop an Ecommerce Online Cattle and Pet Shopping Category</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
            <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call :+8801744499902</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailTo:dipghosh638@gmail.com">dipghosh638@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="#" method="post">
                    <input type="search" name="search" placeholder="Search here..." required="">
                    <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
            <div class="col-md-4 logo_agile">
                <h1><a href="index.html"><span>P</span>etco Shop  <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
            </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                                                           <li class="share">Share On : </li>
                                                            <li><a href="#" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="twitter">
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="instagram">
                                                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav menu__list">
                    <li class="active menu__item menu__item--current"><a class="menu__link" href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li class=" menu__item"><a class="menu__link" href="about">About</a></li>
                    <li class="dropdown menu__item">
                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cattle <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="agile_inner_drop_nav_info">
                                    <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                        <a href="Cattle.html"><img src="{{asset('frontend/images/top2.jpg')}}" alt=" top2image"/></a>
                                    </div>
                                    <div class="col-sm-3 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="cow">Cow</a></li>
                                            <li><a href="buffalo">Buffalo</a></li>
                                            <li><a href="camel">Camel</a></li>
                                            <li><a href="goat">Goats</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                    </li>
                    <li class="dropdown menu__item">
                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pets<span class="caret"></span></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="agile_inner_drop_nav_info">
                                    <div class="col-sm-3 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="Pets.html">Cat</a></li>
                                            <li><a href="Pets.html">Dog</a></li>
                                            <li><a href="Pets.html">Bird</a></li>
                                            <li><a href="Pets.html">Fish</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                        <a href="Pets.html"><img src="{{asset('frontend/images/top1.jpg')}}" alt=" "/></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                    </li>
                    <li class="menu__item dropdown">
                       <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Persons <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="koshai.html">transporter</a></li>
                                    <li><a href="transporter.html">Koshai</a></li>
                                </ul>
                    </li>
                    <li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>

                        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->


<!-- content start -->



@yield('content')


<!-- content end -->


<!--/grids-->
<div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>FREE SHIPPING</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>You can get the koshai and transport SUPPORT during eid and puja only.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>If the cattle are not good then u can get your money back.</p>
                    </div>
                </div>
                    <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>For the Pets lover who have some speical  offer.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>P</span>etco Shop </a></h2>
            <p>This is a online cattle and Petshop where you can only get the cattle and pets
                but also get the information of Transporters and Koshai informations too.</p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                                                            <li><a href="#" class="facebook">
                                                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="twitter">
                                                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="instagram">
                                                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                                            <li><a href="#" class="pinterest">
                                                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                        </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Cattle.html">Men's Wear</a></li>
                        <li><a href="Pets.html">Women's wear</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="typography.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>+8801744499902</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href=" dipghosh638@gmail.com"> dipghosh638@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p>ZP -J-34,MOHAKHALI,GULSHAN 1212</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontend/images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
            <div class="agile_newsletter_footer">
                    <div class="col-sm-6 newsleft">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email..." name="email" required="">
                    <input type="submit" value="Submit">
                </form>
            </div>

        <div class="clearfix"></div>
    </div>
        <p class="copy-right">&copy 2018 PetcoShop. All rights reserved | Design by <a href="http://dipghosh.com/">Dip Ghosh</a></p>
    </div>
</div>
<!-- //footer -->

<!-- login -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-bottom">
                                        <h3>Sign up for free</h3>
                                        <form>
                                            <div class="sign-up">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                            </div>
                                            <div class="sign-up">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                            </div>
                                            <div class="sign-up">
                                                <h4>Re-type Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                            </div>
                                            <div class="sign-up">
                                                <input type="submit" value="REGISTER NOW" >
                                            </div>

                                        </form>
                                    </div>
                                    <div class="login-right">
                                        <h3>Sign in with your account</h3>
                                        <form>
                                            <div class="sign-in">
                                                <h4>Email :</h4>
                                                <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                            </div>
                                            <div class="sign-in">
                                                <h4>Password :</h4>
                                                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                                <a href="#">Forgot password?</a>
                                            </div>
                                            <div class="single-bottom">
                                                <input type="checkbox"  id="brand" value="">
                                                <label for="brand"><span></span>Remember Me.</label>
                                            </div>
                                            <div class="sign-in">
                                                <input type="submit" value="SIGNIN" >
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('js/modernizr.custom.js')}}"></script>
    <!-- Custom-JavaScript-File-Links -->
    <!-- cart-js -->
    <script src="{{asset('frontend/js/minicart.min.js')}}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

    <!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="{{asset('frontend/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion
    width: 'auto', //auto or any width like 600px
    fit: true,   // 100% fit in a container
    closed: 'accordion', // Start closed if in accordion view
    activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    var $info = $('#tabInfo');
    var $name = $('span', $info);
    $name.text($tab.text());
    $info.show();
    }
    });
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
    });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
    <script>
        $('.counter').countUp();
    </script>

<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js//jquery.easing.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
            });
    </script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
</body>
</html>