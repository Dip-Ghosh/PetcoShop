@extends('layout.homelayout')

@section('content')

<!-- Modal1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                                    <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="Email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <input type="submit" value="Sign In">
                        </form>
                          <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
                                                        <div class="clearfix"></div>
                                                        <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="{{asset('frontend/images/log_pic.jpg')}}" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
<!-- //Modal1 -->
<!-- Modal2 -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                         <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="Email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="password" name="password" required="">
                                <label>Password</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="password" name="Confirm Password" required="">
                                <label>Confirm Password</label>
                                <span></span>
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                          <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
                                                        <div class="clearfix"></div>
                                                        <p><a href="#">By clicking register, I agree to your terms</a></p>

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="{{asset('frontend/images/log_pic.jpg')}}" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
<!-- //Modal2 -->

<!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest Eid <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>EID <span>Collection</span></h3>
                        <p>New Arrivals Only for EID</p>
                        <a class="hvr-outline-out button2" href="">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest PUJA <span>Sale</span></h3>
                        <p>Special for PUJA</p>
                        <a class="hvr-outline-out button2" href="">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>HOLIDAY<span>Collection</span></h3>
                        <p> Sale friday</p>
                        <a class="hvr-outline-out button2" href="">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>  REGULAR<span> Sale</span></h3>
                        <p>Special offer</p>
                        <a class="hvr-outline-out button2" href="Cattle.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!-- //banner -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                   <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('frontend/images/bottom1.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>Up</span>Coming</h3>
                                <p>New Arrivals</p>
                            </figcaption>
                        </figure>
                    </div>
                     <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('frontend/images/bottom2.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>F</span>all Ahead</h3>
                                <p>New Arrivals</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
            </div>
         </div>
    </div>
    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="{{asset('frontend/images/mid.jpg')}}" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3>Save up to <span>50%</span> in this week</h3>
                <p>Every week you can save atleast 50% of your cost buying pets and catte from our site. Only only you get the koshai and Transporters
                opportunity but also get  scoring offr.From this score when you reached
                 at a certain stage we have some free medical offer for your pets and cattle. </p>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Customers</h4>
                    <h5 class="counter">653</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Events</h4>
                    <h5 class="counter">823</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Awards</h4>
                    <h5 class="counter">45</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
    <div class="container">
        <h3 class="wthree_text_info">What's <span>Trending</span></h3>

        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="Pets.html">
               <div class="bb-left-agileits-w3layouts-inner grid">
                    <figure class="effect-roxy">
                            <img src="{{asset('frontend/images/bb1.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                </div>
            </a>
        </div>
        <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
              <a href="Cattle.html">
               <div class="bb-middle-agileits-w3layouts grid">
                       <figure class="effect-roxy">
                            <img src="{{asset('frontend/images/bottom3.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                </div>
                </a>
                <a href="Cattle.html">
              <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('frontend/images/bottom4.jpg')}}" alt=" " class="img-responsive">
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 65%</p>
                            </figcaption>
                        </figure>
                    </div>
                    </a>
        <div class="clearfix"></div>
    </div>
    </div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
                    <a href="Pets.html"><img src="{{asset('frontend/images/bot_1.jpg')}}" alt=" "><h4>Flat <span>5%</span> offer and Transport FREE</h4></a>

            </div>
             <div class="col-md-6 multi-gd-img multi-gd-text ">
                    <a href="Pets.html"><img src="{{asset('frontend/images/bot_2.jpg')}}" alt=" "><h4>Flat <span>10%</span> offer and Koshai FREE</h4></a>
            </div>
            <div class="clearfix"></div>
       </div>
<!--/grids-->
<!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">New <span>Arrivals</span></h3>
                <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>COW'S</li>
                            <li> PET'S</li>
                            <li> PET'S</li>
                            <li> CATTLE</li>
                        </ul>
                    <div class="resp-tabs-container">
                    <!--/tab_one-->
                        <div class="tab1">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m1.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m1.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Indian Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Indian Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m2.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m2.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Pakistani Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Pakistani Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m3.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m3.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Hydrabadi Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$80.99</span>
                                            <del>$89.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Hydrabadi Cow " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m4.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m4.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Deshi Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$190.99</span>
                                            <del>$159.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Deshi Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m5.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m5.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Deshi Village Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$60.99</span>
                                            <del>$90.71</del>
                                    </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Deshi Village Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m7.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m7.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Australian Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$160.99</span>
                                            <del>$290.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Australian Cow"/>
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m6.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m6.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Domestic Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$30.99</span>
                                            <del>$50.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Domestic Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/m8.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/m8.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Chiness cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$260.99</span>
                                            <del>$390.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Chiness cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--//tab_one-->
                        <!--/tab_two-->
                        <div class="tab2">
                             <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w1.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w1.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Aliver</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$130.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Aliver" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w2.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w2.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Max</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$140.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Max" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w3.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w3.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Oscars</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$150.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value=" Oscar " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w4.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w4.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Simon</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$120.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value=" Simon" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w5.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w5.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">English Cocker</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$220.99</span>
                                            <del>$389.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="English Cocker" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w6.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w6.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">German Shepherd Dog (GSD / Alsatian)</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$320.99</span>
                                            <del>$489.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="German Shepherd Dog (GSD / Alsatian)" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w7.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w7.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Love Bird</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$100.99</span>
                                            <del>$159.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Love Bird" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/w8.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/w8.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Parrot</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$130.99</span>
                                            <del>$169.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Parrot" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                     <!--//tab_two-->
                        <div class="tab3">

                        <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b1.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b1.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Baby Cat</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$140.99</span>
                                            <del>$169.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value=" Baby Cat" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b2.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b2.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Neon Tetra</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$127.99</span>
                                            <del>$169.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Neon Tetra" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b3.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b3.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Loly Pack</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$120.99</span>
                                            <del>$189.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Loly Pack"/>
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b4.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b4.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Angry Bird </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$190.99</span>
                                            <del>$259.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Angry Bird " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                                    <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b5.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b5.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"> Hush Puppies</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$190.99</span>
                                            <del>$259.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value=" Hush Puppies " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                                    <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b6.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b6.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">German dog </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$190.99</span>
                                            <del>$259.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="German dog" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                                    <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b7.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b7.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dublin </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$290.99</span>
                                            <del>$359.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Dublin" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                                    <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/b8.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/b8.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Guppies</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$120.99</span>
                                            <del>$159.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Guppies " />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab4">

                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s1.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s1.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">white Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$80.99</span>
                                            <del>$89.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="white Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s2.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s2.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Maharasta Cow</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$90.99</span>
                                            <del>$59.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Maharasta Cow" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s3.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s3.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Hydrabadi Camel</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$90.99</span>
                                            <del>$59.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Hydrabadi Camel" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s4.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s4.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Indian Camel</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$40.99</span>
                                            <del>$99.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Indian Camel" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s5.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s5.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Sankar Goat </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$80.99</span>
                                            <del>$99.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Sankar Goat" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s6.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s6.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Black Bangal </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$120.99</span>
                                            <del>$199.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Black Bangal" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s7.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s7.jpg')}} alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Deshi Buffalo</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$160.99</span>
                                            <del>$199.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Deshi Buffalo" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>

                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{asset('frontend/images/s8.jpg')}}" alt="" class="pro-image-front">
                                        <img src="{{asset('frontend/images/s8.jpg')}}" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Indian Buffalo</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$180.99</span>
                                            <del>$199.71</del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Indian Buffalo" />
                                                                    <input type="hidden" name="amount" value="30.99" />
                                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                                    <input type="hidden" name="currency_code" value="USD" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- //new_arrivals -->
    <!-- /we-offer -->
        <div class="sale-w3ls">
            <div class="container">
                <h6>We Offer Flat <span>40%</span> Discount</h6>

                <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
            </div>
        </div>
    <!-- //we-offer -->


    @endsection